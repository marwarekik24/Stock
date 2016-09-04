<?php

namespace Proxies\__CG__\svplocation\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Materiel extends \svplocation\AdminBundle\Entity\Materiel implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'svplocation\\AdminBundle\\Entity\\Materiel' . "\0" . 'idMateriel', '' . "\0" . 'svplocation\\AdminBundle\\Entity\\Materiel' . "\0" . 'idEntrepot', '' . "\0" . 'svplocation\\AdminBundle\\Entity\\Materiel' . "\0" . 'idCategorie', '' . "\0" . 'svplocation\\AdminBundle\\Entity\\Materiel' . "\0" . 'refPiece', '' . "\0" . 'svplocation\\AdminBundle\\Entity\\Materiel' . "\0" . 'codeBarre', '' . "\0" . 'svplocation\\AdminBundle\\Entity\\Materiel' . "\0" . 'valeur');
        }

        return array('__isInitialized__', '' . "\0" . 'svplocation\\AdminBundle\\Entity\\Materiel' . "\0" . 'idMateriel', '' . "\0" . 'svplocation\\AdminBundle\\Entity\\Materiel' . "\0" . 'idEntrepot', '' . "\0" . 'svplocation\\AdminBundle\\Entity\\Materiel' . "\0" . 'idCategorie', '' . "\0" . 'svplocation\\AdminBundle\\Entity\\Materiel' . "\0" . 'refPiece', '' . "\0" . 'svplocation\\AdminBundle\\Entity\\Materiel' . "\0" . 'codeBarre', '' . "\0" . 'svplocation\\AdminBundle\\Entity\\Materiel' . "\0" . 'valeur');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Materiel $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getIdMateriel()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdMateriel();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdMateriel', array());

        return parent::getIdMateriel();
    }

    /**
     * {@inheritDoc}
     */
    public function setRefPiece($refPiece)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRefPiece', array($refPiece));

        return parent::setRefPiece($refPiece);
    }

    /**
     * {@inheritDoc}
     */
    public function getRefPiece()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRefPiece', array());

        return parent::getRefPiece();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodeBarre($codeBarre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodeBarre', array($codeBarre));

        return parent::setCodeBarre($codeBarre);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodeBarre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodeBarre', array());

        return parent::getCodeBarre();
    }

    /**
     * {@inheritDoc}
     */
    public function setValeur($valeur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValeur', array($valeur));

        return parent::setValeur($valeur);
    }

    /**
     * {@inheritDoc}
     */
    public function getValeur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValeur', array());

        return parent::getValeur();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdEntrepot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdEntrepot', array());

        return parent::getIdEntrepot();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdEntrepot($idEntrepot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdEntrepot', array($idEntrepot));

        return parent::setIdEntrepot($idEntrepot);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCategorie', array());

        return parent::getIdCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCategorie($idCategorie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCategorie', array($idCategorie));

        return parent::setIdCategorie($idCategorie);
    }

}
