$(document).ready(function()
{
    $('#commentBox').load( createLink('message', 'comment', 'objectType=article&objectID=' + v.articleID) );  
});
