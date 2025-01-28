<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| External resoruces
|--------------------------------------------------------------------------
|
| 
| 
| 
|
*/

//external resources document types
$config['external_resources']['dctypes'] = array(
    "doc/adm"=>"Document, Administrative",
    "doc/anl"=>"Document, Analytical",
    "doc/qst"=>"Document, Questionnaire",
    "doc/ref"=>"Document, Reference",
    "doc/rep"=>"Document, Report",
    "doc/tec"=>"Document, Technical",
    "doc/oth"=>"Document, Other",
    "dat"=>"Database",
    "dat/micro"=>"Microdata",
    "map"=>"Map",
    "prg"=>"Program / script",
    "tbl"=>"Table",
    "pic"=>"Photo / image",
    "vid"=>"Video",
    "aud"=>"Audio",
    "web"=>"Web Site",
    "final"=>"Final" ,
    "repro" => "reproducible",
    "doc/fnl" => "Final" 
);


//group resources
$config['external_resources']['dctype_groups']= array(
    'questionnaires'=>array(
        'doc/qst'
    ),
    'reports'=>array(
        'doc/rep'
    ),
    'technical'=>array(
        'doc/tec'
    ),
    'reproducible'=>array(
        'repro'
    ),
    'key Findings'=>array(
        'doc/kfd'
    ),
    'Snapshot'=>array(
        'doc/snp'
    ),
    'Biomarker'=>array(
        'doc/bio'
    ),
    'Executive summary'=>array(
        'doc/exs'
    ),
    'Final'=>array(
        'doc/fnl'
    ),
    'Infographic'=>array(
        'doc/inf'
    ),
    'Key indicators'=>array(
        'doc/kid'
    ),
    'Preliminary'=>array(
        'doc/pre'
    ),
    'Preliminary report'=>array(
        'doc/pret'
    ),
    'Snapshots and tables'=>array(
        'doc/snt'
    ),
    'Summary'=>array(
        'doc/sum'
    ),
    'Survey findings'=>array(
        'doc/srf'
    )    
); 

?>
	
	
	
	
	
	
	

	
	
