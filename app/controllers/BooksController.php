<?php
	
	/**
	 * BooksController
	 */
	 class BooksController extends BaseController
	 {
	 	
	 	public function getIndex()
	 	{
	 		return View::make('books.index');
	 	}

	 	public function getBooks()
		{
		  $data = array( 
		    	'Alice in Wonderland', 
		    	'Tom Sawyer', 
		    	'Gulliver\'s Travels', 
		    	'Dracula', 
		    	'Leaves of Grass' 
		    );
		  return Response::json($data);
		   //return View::make('books.index', $data);
		}
	 } 
 ?>