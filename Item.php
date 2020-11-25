<?php

/**
 * Class Item
 */
class Item
{
    /**
     * @var int
     */
    private int $id;
    /**
     * @var string
     */
    private string $name;
    /**
     * @var int
     */
    private int $status;
    /**
     * @var bool
     */
    private bool $changed;

    /**
     * Item constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
        $this->init();
    }

    /**
     * Get object properties
     *
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    /**
     * Set object properties
     * Сheck for emptiness
     * Check data type
     * Save object properties
     *
     * @param $property
     * @param $value
     */
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            if (empty($value)) {
                exit('Значение не заполнено');
            }
            if ($property === 'id') {
                exit('Незозможно изменить id');
            }

            if (gettype($this->$property) === gettype($value)) {

                $this->$property = $value;

                try {
                    $this->save($property, $value);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }

            } else {
                echo 'Неверный тип данных';
            }

        }
    }

    /**
     * Get data from database
     * Writing to instance properties
     */
    private function init(): void
    {
        $name = 'some name';
        $status = 10;
        $this->name = $name;
        $this->status = $status;
    }

    /**
     * Save data in database
     * @param $property
     * @param $value
     */
    public function save($property, $value)
    {

    }

}
