<?php

class Cu3erSlide extends DataObject {
	static $db = array(
		'hasHeading' => 'Boolean',
		'hasDescription' => 'Boolean',
		'Heading' => 'Varchar',
		'Paragraph' => 'Varchar(255)',
		'hasSlideLink' => 'Boolean',
		'hasDescriptionLink' => 'Boolean',
		'SlideLinkTarget' => 'Enum("_blank,_self,_parent,_top","_self")',
		'DescriptionLinkTarget' => 'Enum("_blank,_self,_parent,_top","_self")',
		'TransitionNumofSlices' => 'Int(1)',
		'TransistionSlicing' => 'Enum("horizontal,vertical","horizontal")',
		'TransitionDirection' => 'Enum("left,right,up,down","left")',
		'TransitionDuration' => 'Varchar',
		'TransitionDelay' => 'Varchar',
		'TransitionShader' => 'Enum("none,phong,flat","phong")',
		'TransitionZmultiplier' => 'Int'
		
	);
	
	public static $defaults = array(
		'hasHeading' => '1',
		'hasDescription' => '1',
		'hasSlideLink' => '1',
		'hasDescriptionLink' => '1',
		'TransitionNumofSlices' => '1',
		'TransitionDuration' => '2',
		'TransitionDelay' => '0.1',
		'TransitionShader' => 'Enum("none,phong,flat","phong")',
		'TransitionSlicing' => 'Enum("horizontal,vertical","horizontal")',
		'TransitionZmultiplier' => '2'
	);
	static $has_one = array(
		'SlideImage' => 'Image',
		'Cu3erPage' => 'Cu3erPage',
    	'SlideLink' => 'SiteTree',
		'DescriptionLink' => 'SiteTree'
	);

	static $api_access = true;
	
	
	
	function Thumbnail() {
        if ($Image = $this->SlideImage()) {
	        return $Image->CMSThumbnail();
        } else {
	        return null;
        }
    }
    
    public function canCreate() {       
        $member = Member::currentUser();
        if($member->inGroup(1)) return true;
        else return false;
     } 
    
    public function canEdit() {       
        $member = Member::currentUser();
        if($member->inGroup(1) || $member->inGroup(2)) return true;
        else return false;
     } 
    public function canDelete() {       
        $member = Member::currentUser();
        if($member->inGroup(1)) return true;
        else return false;
     }


	public function getCMSFields_forPopup()
	{
	    $x=singleton('Cu3erSlide');
	    if (class_exists('SimpleTreeDropdownField'))$a='SimpleTreeDropdownField'; else $a='HTMLDropdownField';
	    
		return new FieldSet(
		new FileIFrameField('SlideImage','Slide Image. Note: for optimal results, match image dimensions with slide dimensions.'),
		new HeaderField("HeadingHeader","Descrition Box Heading" ),
			new OptionsetField($name = "hasHeading",$title = "Activate Heading Area?", $source = array("0" => "No","1" => "Yes"),$value = "1"),
			new TextField('Heading', 'Slide Heading'),
			new HeaderField("PHeader","Descrition Box Content" ),
			new OptionsetField($name = "hasDescription",$title = "Activate Description Area?", $source = array("0" => "No","1" => "Yes"),$value = "1"),
			new TextAreaField('Paragraph', 'Content for Slide'),
			new HeaderField("SlideLinkHeader","Slide Properties" ),
			new OptionsetField('hasSlideLink',$title = "Make Entire Slide Clickable?", $source = array("0" => "No","1" => "Yes"),$value = "1"),
			new DropDownField('SlideLinkTarget', 'Select Slide Link Target',$x->dbObject('SlideLinkTarget')->enumValues() ),
			new $a("SlideLinkID",_t('RedirectorPage.YOURPAGEJS', "Link Target"),"SiteTree"),
			new OptionsetField('hasDescriptionLink',$title = "Make Entire Description Box Clickable?", $source = array("0" => "No","1" => "Yes"),$value = "1"),
			new $a("DescriptionLinkID",_t('RedirectorPage.YOURPAGEJS', "Description Link Target"),"SiteTree"),
			new DropDownField('DescriptionLinkTarget', 'Select Description Link Target',$x->dbObject('DescriptionLinkTarget')->enumValues() ),
			new TextField('TransitionNumofSlices', 'Transition Number of Slices'),
			new DropDownField('TransistionSlicing', 'Transition Slicing Direction',$x->dbObject('TransistionSlicing')->enumValues() ),
			new TextField('TransitionDelay', 'Transition Delay'),
			new TextField('TransitionDuration','Transition Duration'),
			new DropDownField('TransitionDirection','Transition Direction',$x->dbObject('TransitionDirection')->enumValues()),
			new DropDownField('TransitionShader','Transition Shader',$x->dbObject('TransitionShader')->enumValues()),
			new TextField('TransitionZmultiplier','Transition Z-Multiplier')

		);
	}

}
?>
