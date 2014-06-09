function submitExistingNews(news_id) {
    var request = $.ajax({
        type: "POST",
        url: "../../actions/news/submit.php",
        data: {id: news_id}
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

function selectStars(estrela) {
    var found = false;
    for (var i = 0; i < $("#rating").find(".fi-star").length; i++) {

        if (!found) {
            $("#rating").find(".fi-star").eq(i).addClass('rating-star-enabled').removeClass('rating-star-disabled');
        }
        else {
            $("#rating").find(".fi-star").eq(i).removeClass('rating-star-enabled').addClass('rating-star-disabled');
        }

        if ($(estrela).position().top == $("#rating").find(".fi-star").eq(i).position().top && $(estrela).position().left == $("#rating").find(".fi-star").eq(i).position().left) {
            found = true;
        }
    }
}

function publishNews(news_id) {
    var request = $.ajax({
        type: "POST",
        url: "../../actions/news/publish.php",
        data: {id: news_id}
    });

    request.fail(function() {
        alert("Something went wrong!");
    });
}

function rejectNews(news_id) {
    var request = $.ajax({
        type: "POST",
        url: "../../actions/news/reject.php",
        data: {id: news_id}
    });

    request.fail(function() {
        alert("Something went wrong!");
    });
}

function insertComment(news_id, content) {
    var request = $.ajax({
        type: "POST",
        url: "../../actions/news/insertcomment.php",
        data: {content: content, news_id: news_id}
    });
    request.done(function(data) {
        var comment = jQuery.parseJSON(data);
        
        $('#comments').prepend('<div id="comment-' + comment.id + '" class="panel radius"><h5><small><div class="comment-username"><a href="../users/profile.php?id=' + comment.user_id + '">' + comment.name + '</a> <div class="comment-datetime">' + comment.published_at + '</div><button type="button" onclick="deleteComment(' + comment.id + ');" class="comment-delete">Delete</button><button type="button" class="comment-edit">Edit</button></small></h5><p>' + comment.content + '</p></div>');
        
        $('#comment-content').val('');
    });
    request.fail(function() {
        alert("Something went wrong!");
    });
}

function deleteComment(comment_id) {
    var request = $.ajax({
        type: "POST",
        url: "../../actions/news/deletecomment.php",
        data: {comment_id: comment_id}
    });
    request.done(function() {
        $();
    });
    request.fail(function() {
        alert("Something went wrong!");
    });
}