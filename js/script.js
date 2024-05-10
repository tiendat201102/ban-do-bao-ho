function change_country() {
    var selectBox = document.getElementById("country");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    if (selectedValue === "quanAo.php") {
        window.location.href = selectedValue;
    }
    if (selectedValue === "gangTay.php") {
        window.location.href = selectedValue;
    }
    if (selectedValue === "giay.php") {
        window.location.href = selectedValue;
    }
    if (selectedValue === "mu.php") {
        window.location.href = selectedValue;
    }
}

function searchProduct() {
    var searchInput = document.getElementById("searchInput").value;

    // Thực hiện yêu cầu AJAX
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("searchResult").innerHTML = xhr.responseText;
        }
    };
    xhr.open("GET", "searchProduct.php?keyword=" + encodeURIComponent(searchInput), true);
    xhr.send();
}