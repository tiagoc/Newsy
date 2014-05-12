function submitExistingNews(news_id) {
    var request = $.ajax({
        type: "POST",
        url: "../../actions/news/submit.php",
        data: {id: news_id}
    });

    request.done(function() {
        $("#draft-" + news_id).remove();
        alert("Successfully submitted!");
    });

    request.fail(function() {
        alert("Something went wrong!");
    });

}

function deleteNews(news_id) {
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

function fetchAllPublishedNews(start_id, limit) {
    var request = $.ajax({
        type: "GET",
        url: "../../api/news/fetchpublished.php",
        data: {start: start_id, n: limit}
    });

    request.done(function(data) {
        return(data);
    });

    request.fail(function() {
        alert("Something went wrong!");
    });
}

function fillCategoryWidget() {
    $(document).ready(function() {
        $.getJSON("../../api/categories/fetch.php", function(data) {
            $.each(data, function(i, category) {
                $('#category-widget').append('<li class="text-center"><a href="#">' + category.name + '</a></li>');
            });
        });
    });
}