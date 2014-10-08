<?php

	/**
	 * searchcontroller
	 */
	 class SearchController extends BaseController
	 {
	 	
	 	public function getIndex()
	 	{
	 		return View::make('search.index');
	 	}

	 	public function postSearch()
	 	{
			$return = array();

			$term = Input::get('term');

			$books =  array( 
    							array('name' => 'Alice in Wonderland', 'author' => 'Lewis Carroll'), 
    							array('name' => 'Tom Sawyer', 'author' => 'Mark Twain'), 
    							array('name' => 'Gulliver\'s Travels', 'author' => 'Jonathan Swift'), 
    							array('name' => 'The Art of War', 'author' => 'Sunzi'), 
    							array('name' => 'Dracula', 'author' => 'Bram Stoker'), 
    							array('name' => 'War and Peace', 'author' => 'LeoTolstoy'), 
    						);

    		foreach ($books as $book ) 
    		{
    			if (stripos($book['name'], $term) !== FALSE) $return[] =  $book;
			}
			return Response::json($return);
    			 		
	 	}
	 } 
 ?>