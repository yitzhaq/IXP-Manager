<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Switcher extends \Entities\Switcher implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'name', 'ipv4addr', 'ipv6addr', 'snmppasswd', 'Infrastructure', 'model', 'hostname', 'notes', 'asn', 'loopback_ip', 'loopback_name', 'mgmt_mac_address', 'id', '' . "\0" . 'Entities\\Switcher' . "\0" . 'mauSupported', '' . "\0" . 'Entities\\Switcher' . "\0" . 'serialNumber', 'os', 'active', 'poll', 'osDate', 'osVersion', 'lastPolled', 'snmp_engine_boots', 'snmp_engine_time', 'snmp_system_uptime', 'Ports', 'ConsoleServerConnections', 'Cabinet', 'Vendor'];
        }

        return ['__isInitialized__', 'name', 'ipv4addr', 'ipv6addr', 'snmppasswd', 'Infrastructure', 'model', 'hostname', 'notes', 'asn', 'loopback_ip', 'loopback_name', 'mgmt_mac_address', 'id', '' . "\0" . 'Entities\\Switcher' . "\0" . 'mauSupported', '' . "\0" . 'Entities\\Switcher' . "\0" . 'serialNumber', 'os', 'active', 'poll', 'osDate', 'osVersion', 'lastPolled', 'snmp_engine_boots', 'snmp_engine_time', 'snmp_system_uptime', 'Ports', 'ConsoleServerConnections', 'Cabinet', 'Vendor'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Switcher $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpv4addr($ipv4addr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpv4addr', [$ipv4addr]);

        return parent::setIpv4addr($ipv4addr);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpv4addr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpv4addr', []);

        return parent::getIpv4addr();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpv6addr($ipv6addr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpv6addr', [$ipv6addr]);

        return parent::setIpv6addr($ipv6addr);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpv6addr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpv6addr', []);

        return parent::getIpv6addr();
    }

    /**
     * {@inheritDoc}
     */
    public function setSnmppasswd($snmppasswd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSnmppasswd', [$snmppasswd]);

        return parent::setSnmppasswd($snmppasswd);
    }

    /**
     * {@inheritDoc}
     */
    public function getSnmppasswd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSnmppasswd', []);

        return parent::getSnmppasswd();
    }

    /**
     * {@inheritDoc}
     */
    public function setInfrastructure(\Entities\Infrastructure $infrastructure = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInfrastructure', [$infrastructure]);

        return parent::setInfrastructure($infrastructure);
    }

    /**
     * {@inheritDoc}
     */
    public function getInfrastructure()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInfrastructure', []);

        return parent::getInfrastructure();
    }

    /**
     * {@inheritDoc}
     */
    public function setModel($model)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModel', [$model]);

        return parent::setModel($model);
    }

    /**
     * {@inheritDoc}
     */
    public function getModel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModel', []);

        return parent::getModel();
    }

    /**
     * {@inheritDoc}
     */
    public function setNotes($notes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNotes', [$notes]);

        return parent::setNotes($notes);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotes', []);

        return parent::getNotes();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function addPort(\Entities\SwitchPort $ports)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPort', [$ports]);

        return parent::addPort($ports);
    }

    /**
     * {@inheritDoc}
     */
    public function removePort(\Entities\SwitchPort $ports)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePort', [$ports]);

        return parent::removePort($ports);
    }

    /**
     * {@inheritDoc}
     */
    public function getPorts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPorts', []);

        return parent::getPorts();
    }

    /**
     * {@inheritDoc}
     */
    public function addConsoleServerConnection(\Entities\ConsoleServerConnection $consoleServerConnections)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addConsoleServerConnection', [$consoleServerConnections]);

        return parent::addConsoleServerConnection($consoleServerConnections);
    }

    /**
     * {@inheritDoc}
     */
    public function removeConsoleServerConnection(\Entities\ConsoleServerConnection $consoleServerConnections)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeConsoleServerConnection', [$consoleServerConnections]);

        return parent::removeConsoleServerConnection($consoleServerConnections);
    }

    /**
     * {@inheritDoc}
     */
    public function getConsoleServerConnections()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConsoleServerConnections', []);

        return parent::getConsoleServerConnections();
    }

    /**
     * {@inheritDoc}
     */
    public function setCabinet(\Entities\Cabinet $cabinet = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCabinet', [$cabinet]);

        return parent::setCabinet($cabinet);
    }

    /**
     * {@inheritDoc}
     */
    public function getCabinet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCabinet', []);

        return parent::getCabinet();
    }

    /**
     * {@inheritDoc}
     */
    public function setVendor(\Entities\Vendor $vendor = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVendor', [$vendor]);

        return parent::setVendor($vendor);
    }

    /**
     * {@inheritDoc}
     */
    public function getVendor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVendor', []);

        return parent::getVendor();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', []);

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setPoll(bool $poll)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPoll', [$poll]);

        return parent::setPoll($poll);
    }

    /**
     * {@inheritDoc}
     */
    public function getPoll(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPoll', []);

        return parent::getPoll();
    }

    /**
     * {@inheritDoc}
     */
    public function setHostname($hostname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHostname', [$hostname]);

        return parent::setHostname($hostname);
    }

    /**
     * {@inheritDoc}
     */
    public function getHostname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHostname', []);

        return parent::getHostname();
    }

    /**
     * {@inheritDoc}
     */
    public function setOs($os)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOs', [$os]);

        return parent::setOs($os);
    }

    /**
     * {@inheritDoc}
     */
    public function getOs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOs', []);

        return parent::getOs();
    }

    /**
     * {@inheritDoc}
     */
    public function setOsDate($osDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOsDate', [$osDate]);

        return parent::setOsDate($osDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getOsDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOsDate', []);

        return parent::getOsDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setOsVersion($osVersion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOsVersion', [$osVersion]);

        return parent::setOsVersion($osVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getOsVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOsVersion', []);

        return parent::getOsVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastPolled($lastPolled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastPolled', [$lastPolled]);

        return parent::setLastPolled($lastPolled);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastPolled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastPolled', []);

        return parent::getLastPolled();
    }

    /**
     * {@inheritDoc}
     */
    public function snmpPoll($host, bool $logger = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'snmpPoll', [$host, $logger]);

        return parent::snmpPoll($host, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function snmpPollSwitchPorts($host, $logger = false, &$result = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'snmpPollSwitchPorts', [$host, $logger, $result]);

        return parent::snmpPollSwitchPorts($host, $logger, $result);
    }

    /**
     * {@inheritDoc}
     */
    public function setSerialNumber($serialNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSerialNumber', [$serialNumber]);

        return parent::setSerialNumber($serialNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getSerialNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSerialNumber', []);

        return parent::getSerialNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setMauSupported($mauSupported)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMauSupported', [$mauSupported]);

        return parent::setMauSupported($mauSupported);
    }

    /**
     * {@inheritDoc}
     */
    public function getMauSupported()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMauSupported', []);

        return parent::getMauSupported();
    }

    /**
     * {@inheritDoc}
     */
    public function setAsn($asn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAsn', [$asn]);

        return parent::setAsn($asn);
    }

    /**
     * {@inheritDoc}
     */
    public function getAsn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAsn', []);

        return parent::getAsn();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoopbackIP($loopback_ip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoopbackIP', [$loopback_ip]);

        return parent::setLoopbackIP($loopback_ip);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoopbackIP()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoopbackIP', []);

        return parent::getLoopbackIP();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoopbackName($loopback_name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoopbackName', [$loopback_name]);

        return parent::setLoopbackName($loopback_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoopbackName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoopbackName', []);

        return parent::getLoopbackName();
    }

    /**
     * {@inheritDoc}
     */
    public function getMgmtMacAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMgmtMacAddress', []);

        return parent::getMgmtMacAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setMgmtMacAddress($mgmt_mac_address): \Entities\Switcher
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMgmtMacAddress', [$mgmt_mac_address]);

        return parent::setMgmtMacAddress($mgmt_mac_address);
    }

    /**
     * {@inheritDoc}
     */
    public function getSnmpEngineBoots(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSnmpEngineBoots', []);

        return parent::getSnmpEngineBoots();
    }

    /**
     * {@inheritDoc}
     */
    public function setSnmpEngineBoots(int $snmp_engine_boots): \Entities\Switcher
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSnmpEngineBoots', [$snmp_engine_boots]);

        return parent::setSnmpEngineBoots($snmp_engine_boots);
    }

    /**
     * {@inheritDoc}
     */
    public function getSnmpEngineTime(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSnmpEngineTime', []);

        return parent::getSnmpEngineTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setSnmpEngineTime(int $snmp_engine_time): \Entities\Switcher
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSnmpEngineTime', [$snmp_engine_time]);

        return parent::setSnmpEngineTime($snmp_engine_time);
    }

    /**
     * {@inheritDoc}
     */
    public function getSnmpSystemUptime(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSnmpSystemUptime', []);

        return parent::getSnmpSystemUptime();
    }

    /**
     * {@inheritDoc}
     */
    public function setSnmpSystemUptime(int $snmp_system_uptime): \Entities\Switcher
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSnmpSystemUptime', [$snmp_system_uptime]);

        return parent::setSnmpSystemUptime($snmp_system_uptime);
    }

    /**
     * {@inheritDoc}
     */
    public function recentlyRebooted(int $window = 60): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'recentlyRebooted', [$window]);

        return parent::recentlyRebooted($window);
    }

    /**
     * {@inheritDoc}
     */
    public function status()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'status', []);

        return parent::status();
    }

    /**
     * {@inheritDoc}
     */
    public function getCoreBundles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoreBundles', []);

        return parent::getCoreBundles();
    }

}
