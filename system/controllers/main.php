<? // default system controller
$data = array();

function main_construct(){
	global $data;
	$data['categories'] = model_exec('global', 'get_all_categories');
	if(logged_in()){
		$data['name'] = get_session('username');
	}
}

function main_index($name = false, $category = false){
	global $data;
	load_model('article');
	if($category === false){
		$data['articles'] = model_exec('global', 'get_articles');
		$data['header'] = "All Articles";
	}else{
		$data['articles'] = model_exec('global', 'get_articles_category', array($category));
		$data['header'] = "Articles in $name";
	}
	foreach($data['articles'] as $key=>$art){
		$data['articles'][$key]['info'] = model_exec('article', 'getDetails', array($art['revision_id']));
	}
	load_view('main', $data);
}

function main_view($article_id){
	global $data;
	load_model('article');
	
	$revision_id = model_exec('article', 'getRevision', array($article_id));
	$data['article'] = model_exec('article', 'getDetails', array($revision_id));
	
	load_view('view', $data);
}

?>
