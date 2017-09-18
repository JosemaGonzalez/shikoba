<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Conductas extends \AppBundle\Entity\Conductas implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Conductas' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Conductas' . "\0" . 'conducta', '' . "\0" . 'AppBundle\\Entity\\Conductas' . "\0" . 'puntos', '' . "\0" . 'AppBundle\\Entity\\Conductas' . "\0" . 'tipo', '' . "\0" . 'AppBundle\\Entity\\Conductas' . "\0" . 'idParte'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Conductas' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Conductas' . "\0" . 'conducta', '' . "\0" . 'AppBundle\\Entity\\Conductas' . "\0" . 'puntos', '' . "\0" . 'AppBundle\\Entity\\Conductas' . "\0" . 'tipo', '' . "\0" . 'AppBundle\\Entity\\Conductas' . "\0" . 'idParte'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Conductas $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
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
    public function setConducta($conducta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConducta', [$conducta]);

        return parent::setConducta($conducta);
    }

    /**
     * {@inheritDoc}
     */
    public function getConducta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConducta', []);

        return parent::getConducta();
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreAndPuntos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreAndPuntos', []);

        return parent::getNombreAndPuntos();
    }

    /**
     * {@inheritDoc}
     */
    public function setPuntos($puntos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPuntos', [$puntos]);

        return parent::setPuntos($puntos);
    }

    /**
     * {@inheritDoc}
     */
    public function getPuntos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPuntos', []);

        return parent::getPuntos();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipo($tipo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipo', [$tipo]);

        return parent::setTipo($tipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipo', []);

        return parent::getTipo();
    }

    /**
     * {@inheritDoc}
     */
    public function addIdParte(\AppBundle\Entity\Partes $idParte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIdParte', [$idParte]);

        return parent::addIdParte($idParte);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIdParte(\AppBundle\Entity\Partes $idParte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIdParte', [$idParte]);

        return parent::removeIdParte($idParte);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdParte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdParte', []);

        return parent::getIdParte();
    }

}
