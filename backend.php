<?php
class album{
	public $name;
	public $tags;
	private $coverImgSource;
    public $albums = array();
    
	function __construct($name, $tags, $coverImgSource){
		$this->name = $name;
		$this->tags = $tags;
		$this->coverImgSource = $coverImgSource;
	}
    
	function get_name(){
		return $this->name;
	}
	function get_tags(){
		return $this->tags;
	}
	function get_coverImgSource(){
		return $this->coverImgSource;
	}
}	
class images{
	public $name;
	public $tags;
	private $imageSource;

	function __construct($name, $tags, $imageSource){
		$this->name = $name;
		$this->tags = $tags;
		$this->imageSource = $imageSource;
	}
	function get_name(){
		return $this->name;
	}
	function get_tags(){
		return $this->tags;
	}
	function get_coverImgSource(){
		return $this->imageSource;
	}
}
 
?>