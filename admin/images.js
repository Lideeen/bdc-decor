/**
 * Created by Liden on 14.08.2016.
 */
$(document).ready(function() {
    function renderImage(file) {
        var reader = new FileReader();
        reader.onload = function (event) {
            the_url = event.target.result
            $('#images-container').append("<img src='" + the_url + "' alt=''>");
        }
        reader.readAsDataURL(file);
    }

    $("#images").change(function () {
        $(this.files).each(function() {
            renderImage(this);
        });
    });
//---------------------------------------------------------
    function renderMainImage(file) {
        var reader = new FileReader();
        reader.onload = function (event) {
            the_url = event.target.result
            $('#main-image-container').append("<img src='" + the_url + "' alt=''>");
        }
        reader.readAsDataURL(file);
    }

    $("#main-image").change(function () {
        $(this.files).each(function() {
            renderMainImage(this);
        });
    });
});
