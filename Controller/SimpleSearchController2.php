<?php
/*
* This file is part of EmoSimpleSearchApiBundle bundle
*
* (c) Emiliyan Kadiyski <e.kadiyski@gmail.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Emo\SimpleSearchApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Emo\SimpleSearchApiBundle\Entity\FileSearch;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Request;
use Emo\SimpleSearchApiBundle\Form\Type\SearchContentType;
use Symfony\Component\HttpFoundation\Response;

/**
* Main controller that renders the form and result from the search
*/
class SimpleSearchController2 extends Controller
{
    /**
     * @Route("/emo_simple_search_api_bundle/{searchContent}/{fileType}/{searchDir}")
     */
    public function searchAction($searchDir = "", $searchContent = "search text", $fileType="php")
    {
	    $finder = new Finder();
	    if(isset($fileType))
	    {
	    	$finder->files()->name("*.$fileType");
	    }

	    if(isset($searchDir) && $searchDir !== "")
	    {
	    	$finder->files()->in($searchDir);
	    }else{
	    	$finder->files()->in(__DIR__);
	    }

	    if(isset($searchContent))
	    {
	    	$finder->contains($searchContent);
	    }

	    $result = array('result' => "No content '$searchContent' in '$searchDir'");
	    if(isset($finder) && count($finder)>0)
	    {
	    	$result['result'] = "Found results in $searchDir";
	    	foreach ($finder as $key => $value) {
				$result[] = "$value contains '$searchContent'";
			}
	    }

	    return new Response(
	        json_encode($result),
	        200,
	        array('Content-Type' => 'application/json')
        );
    }
}
