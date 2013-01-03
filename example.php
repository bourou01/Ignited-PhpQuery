//to load in a controller
$this->load->helper('phpQuery');

//I'm using phpQuery in one of my libraries. So, load like this..
$ci =& get_instance();
$ci->load->helper('phpQuery');

//now use phpQuery like normal.  
phpQuery::newDocumentHTML('<div id="test">This is a test.</div');

$testElement = pq('#test');

echo $testElement->html(); //This is a test.