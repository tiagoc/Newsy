function submitExistingNews(news_id) {
    var request = $.ajax({
        type: "POST",
        url: "../../actions/news/submit.php",
        data: {id: news_id}
    });
    
    request.done(function() {       
        $("#draft-"+news_id).remove();
        alert("Successfully submitted!"); 
    });
    
    request.fail(function() {
        alert("Something went wrong!");
    });

}

function deleteNews() {
    var request = $.ajax({
        type: "POST",
        url: "../../actions/news/delete.php",
        data: {id: news_id}
    });
    
    request.done(function() {
        alert("Successfully deleted!");
    });
    
    request.fail(function() {
        alert("Something went wrong!");
    });
}