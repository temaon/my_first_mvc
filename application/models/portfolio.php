<?php

/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 01.04.17
 * Time: 14:50
 */
class Portfolio extends Model
{
    public $table_name = 'portfolios';

    protected $title;

    protected $year;

    protected $site;

    protected $description;

    protected $fields = [
        'title',
        'description',
        'site',
        'year'
    ];


    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getSite()
    {
        return $this->site;
    }

    public function setSite($site)
    {
        $this->site = $site;
        return $this;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

}