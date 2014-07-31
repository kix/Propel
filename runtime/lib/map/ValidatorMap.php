<?php

/**
 * This file is part of the Propel package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

/**
 * ValidatorMap is used to model a column validator.
 *
 * GENERAL NOTE
 * ------------
 * The propel.map classes are abstract building-block classes for modeling
 * the database at runtime.  These classes are similar (a lite version) to the
 * propel.engine.database.model classes, which are build-time modeling classes.
 * These classes in themselves do not do any database metadata lookups.
 *
 * @author     Michael Aichler <aichler@mediacluster.de>
 * @version    $Revision$
 * @package    propel.runtime.map
 */
class ValidatorMap
{
    /** rule name of this validator */
    private $name;
    /** the dot-path to class to use for validator */
    private $classname;
    /** value to check against */
    private $value;
    /** exception message thrown on invalid input */
    private $message;
    /** related column */
    private $column;

    /**
     * @param ColumnMap $containingColumn
     */
    public function __construct($containingColumn)
    {
        $this->column = $containingColumn;
    }

    public function getColumn()
    {
        return $this->column;
    }

    public function getColumnName()
    {
        return $this->column->getColumnName();
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $classname
     */
    public function setClass($classname)
    {
        $this->classname = $classname;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getClass()
    {
        return $this->classname;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
