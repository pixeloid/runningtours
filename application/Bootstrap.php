<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	
	
	protected function _initAppConfig()
	    {
		    $config = new Zend_Config($this->getOptions(), true);
		    Zend_Registry::set('config', $config);
		    return $config;
	    }
	
	
	/**
	* Bootstrap Smarty view
	*/
	protected function _initView()
	{
		
		
		// initialize smarty view
		$options = $this->getOption('smarty');
		$view = new Ext_View_Smarty($options);

		$this->bootstrap('layout');
		$layout = Zend_Layout::getMvcInstance();
		$layout->setViewSuffix('tpl');

		// setup viewRenderer with suffix and view
		$viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('ViewRenderer');
		$viewRenderer->setViewSuffix('tpl');
		$viewRenderer->setView($view);
		$viewRenderer->view->addHelperPath(realpath(dirname(__FILE__) . '/../library/App/View/Helper'), 'App_View_Helper');
		
		

	    $view->headTitle('Running Tours Budapest – because running is stunning...')->setSeparator(' | ');



		return $view;
	}

	public function _initCss()
	{
		
		// try{
		// 	$this->autoCompileLess("less/styles.less", "css/styles.css");
		// } catch (Exception $e) {
		// 	echo $e->getMessage();
		// }
		
	}
	
	
	function autoCompileLess($inputFile, $outputFile) {
	  // load the cache
		require LIBRARY_PATH . "/App/Lessc.php";

	  $cacheFile = $inputFile.".cache";

	  if (file_exists($cacheFile)) {
	    $cache = unserialize(file_get_contents($cacheFile));
	  } else {
	    $cache = $inputFile;
	  }

		$less = new Lessc();
		
		$less->setFormatter("compressed");
	  	$newCache = $less->cachedCompile($cache);

	  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
	    file_put_contents($cacheFile, serialize($newCache));
	    file_put_contents($outputFile, $newCache['compiled']);
	  }
	}

	
	
	/**
	 * @return Zend_Navigation
	 */
	protected function _initNavigation()
	{
  		$this->bootstrap('layout');
        $layout = $this->getResource('layout');
        $view = $layout->getView();		
		
		try {
			$config = new Zend_Config_Xml(APPLICATION_PATH . '/configs/navigation.xml', 'nav');
			$view->mainNav = new Zend_Navigation($config);
		} catch (Exception $e) {}

		
	}	
	
	
	
	/**
     * Initializes the database resource loader
     * @access protected
     * @return void
     * @throws Exception
     */
    protected function _initDatabase()
    {

				$config = Zend_Registry::get('config');
				$config->merge(new Zend_Config_Ini(APPLICATION_PATH . '/configs/db.ini', APPLICATION_ENV));
				Zend_Registry::set('config', $config);

				$doctrineConfig = $config->doctrine;
				require LIBRARY_PATH . '/Doctrine/Common/ClassLoader.php';

				
				
				$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\Common', LIBRARY_PATH);
				$classLoader->register();

				$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\ORM', LIBRARY_PATH);
				$classLoader->register();

				$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\DBAL', LIBRARY_PATH);
				$classLoader->register();

				$classLoader = new \Doctrine\Common\ClassLoader('Symfony', LIBRARY_PATH . '/Doctrine');
				$classLoader->register();


				$classLoader = new \Doctrine\Common\ClassLoader('Entity', LIBRARY_PATH);
				$classLoader->register();

				$classLoader = new \Doctrine\Common\ClassLoader('Repository', LIBRARY_PATH .'/Entity');
				$classLoader->register();

				$classLoader = new \Doctrine\Common\ClassLoader('Gedmo', LIBRARY_PATH);
				$classLoader->register();

				$classLoader = new \Doctrine\Common\ClassLoader('DoctrineExtensions', LIBRARY_PATH);
				$classLoader->register();

				$classLoader = new \Doctrine\Common\ClassLoader('Bgy', LIBRARY_PATH);
				$classLoader->register();
				
				
				Doctrine\Common\Annotations\AnnotationRegistry::registerFile(
				    LIBRARY_PATH . '/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php'
				);

				// globally used cache driver, in production use APC or memcached
				$cache = new Doctrine\Common\Cache\ArrayCache;
				// standard annotation reader
				$annotationReader = new Doctrine\Common\Annotations\AnnotationReader;
				$cachedAnnotationReader = new Doctrine\Common\Annotations\CachedReader(
				    $annotationReader, // use reader
				    $cache // and a cache driver
				);
				// create a driver chain for metadata reading
				$driverChain = new Doctrine\ORM\Mapping\Driver\DriverChain();
				// load superclass metadata mapping only, into driver chain
				// also registers Gedmo annotations.NOTE: you can personalize it
				Gedmo\DoctrineExtensions::registerAbstractMappingIntoDriverChainORM(
				    $driverChain, // our metadata driver chain, to hook into
				    $cachedAnnotationReader // our cached annotation reader
				);

				// now we want to register our application entities,
				// for that we need another metadata driver used for Entity namespace
				$annotationDriver = new Doctrine\ORM\Mapping\Driver\AnnotationDriver(
				    $cachedAnnotationReader, // our cached annotation reader
				    array(LIBRARY_PATH.'/Entity') // paths to look in
				);
				// NOTE: driver for application Entity can be different, Yaml, Xml or whatever
				// register annotation driver for our application Entity namespace
				$driverChain->addDriver($annotationDriver, 'Entity');

				// general ORM configuration
				$config = new Doctrine\ORM\Configuration;
				$config->setAutoGenerateProxyClasses(true); // this can be based on production config.
				// register metadata driver
				$config->setMetadataDriverImpl($driverChain);
				// use our allready initialized cache driver
				$config->setMetadataCacheImpl($cache);
				$config->setQueryCacheImpl($cache);



		        // Proxies
		        $config->setProxyDir(APPLICATION_PATH . '/../library/Entity/proxies');
		        $config->setProxyNamespace('Entity\Proxies');
		

		

		if (APPLICATION_ENV == "development") {

			$logger = new Bgy\DBAL\Logging\Firebug;
			$config->setSQLLogger($logger);

			$config->setAutoGenerateProxyClasses(true);

		} else {
			$config->setAutoGenerateProxyClasses(false);
		}

		// Event listeners
		$evm = new Doctrine\Common\EventManager();

		$treeListener = new Gedmo\Tree\TreeListener;
		$treeListener->setAnnotationReader($cachedAnnotationReader);
		$evm->addEventSubscriber($treeListener);

		$sluggableListener = new Gedmo\Sluggable\SluggableListener;
		// you should set the used annotation reader to listener, to avoid creating new one for mapping drivers
		$sluggableListener->setAnnotationReader($cachedAnnotationReader);
		$evm->addEventSubscriber($sluggableListener);


		$timestampableListener = new Gedmo\Timestampable\TimestampableListener;
		$timestampableListener->setAnnotationReader($cachedAnnotationReader);
		$evm->addEventSubscriber($timestampableListener);


		if($doctrineConfig->driver == 'pdo_mysql'){
			$evm->addEventSubscriber(new Doctrine\DBAL\Event\Listeners\MysqlSessionInit('utf8', 'utf8_unicode_ci')); 
		}


		// Driver config mapping
		$connectionOptions = array(
			'driver'    => $doctrineConfig->driver,
			'user'      => $doctrineConfig->user,
			'password'  => $doctrineConfig->password,
			'dbname'    => $doctrineConfig->dbname,
			'path'    => $doctrineConfig->path,
			'host'      => $doctrineConfig->host,
			'unix_socket' => $doctrineConfig->unix_socket
			);

			// EntityManager instance
			$em = Doctrine\ORM\EntityManager::create($connectionOptions, $config, $evm);
			$conn = $em->getConnection();

			Zend_Registry::set('EntityManager', $em);
			Zend_Registry::set('DbConnection', $conn);


    }
    
    
	protected function __initZFDebug()
	{	
		
		if (APPLICATION_ENV != "development") return;
	
	    $autoloader = Zend_Loader_Autoloader::getInstance();
	    $autoloader->registerNamespace('ZFDebug');

	    $options = array(
	        'plugins' => array('Variables', 
	                          // 'Database' => array('adapter' => $db), 
	                           'File' => array('basePath' => '/path/to/project'),
	                          // 'Cache' => array('backend' => $cache->getBackend()), 
	                           'Exception')
	    );
	    $debug = new ZFDebug_Controller_Plugin_Debug($options);

	    $this->bootstrap('frontController');
	    $frontController = $this->getResource('frontController');
	    $frontController->registerPlugin($debug);
	}
    

}

