<?php

class Movie 
{
    private $Title = null;
    private $Time = 128;
    private $Description = 'It is just a nanar';
    private $ReleaseDate = '21.10.2012';

    function show()
    {
        echo $this->Title."\n".$this->Time."\n".$this->Description."\n".$this->ReleaseDate;
    }
    
    public function getTitle()
    {
        return $this->Title;
    }
    
    public function setTitle($Title)
    {
        $this->Title = $Title;
    }
    
    public function __construct($Title,$Time,$Description,$ReleaseDate){
        $this->Title = $Title;
        $this->Time = $Time;
        $this->Description = $Description;
        $this->ReleaseDate = $ReleaseDate;
    }
}

$movie = new Movie('Sharknado',152,'Un bon gros nanar des familles','21-10-2003');
$movie->show();