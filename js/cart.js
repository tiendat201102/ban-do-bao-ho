function isExistedInCart(item, arrCart){
    let myIndex = -1;
    arrCart.forEach((itemCard, index) => {
        if(item.id == itemCard.id) myIndex = index;
    });
    return myIndex;
}

const increaseQuantity = (evt) => {
    let updatedCart = [];
    updatedCart = JSON.parse(localStorage.getItem('cartItems_' + userEmail));
    updatedCart.forEach((item, index) => {
        if(item.id === evt.parentElement.parentElement.children[1].textContent){
            debugger;
            $.ajax({
                type: 'POST',
                url: 'update_stock.php',
                data: { productIDAdd: item.id,
                        numberIdAdd: item.quantity
                },
                success: function(response) {
                    //alert(response);
                        if (response === "hetHang") {
                            // Hiển thị thông báo sản phẩm hết hàng
                            alert("Sản phẩm hết hàng.");
                        } else if (response === "Cập nhật số lượng tồn kho thành công...") {
                            
                            updatedCart[index].quantity++;
                            
                            localStorage.setItem('cartItems_' + userEmail, JSON.stringify(updatedCart));
                            //alert("Tang");
                            window.location.reload();  
                        }
                    
                }
            });
            debugger;
                    
        }
    }); 
};



const decreaseQuantity = (evt) => {
    let updatedCart = [];
    let custommerCart = [];
    custommerCart = JSON.parse(localStorage.getItem('cartItems_' + userEmail));
    updatedCart = JSON.parse(localStorage.getItem('cartItems_' + userEmail));
    updatedCart.forEach((item, index) => {
        if(item.id === evt.parentElement.parentElement.children[1].textContent){
            debugger;
            $.ajax({
                type: 'POST',
                url: 'update_stock.php',
                data: { productIDSub: item.id,
                        numberIdSub: item.quantity
                },
                success: function(response) {
                    //alert(response);
                        if (response == "hetHang") {
                            // Hiển thị thông báo sản phẩm hết hàng
                            alert("Sản phẩm đã hết hàng.");
    
                        } else if (response == "Cập nhật số lượng tồn kho thành công."){
                            
                            updatedCart[index].quantity--;
                            localStorage.setItem('cartItems_' + userEmail, JSON.stringify(updatedCart));
         
                            if(updatedCart[index].quantity == 0)
                                continueProcessing();
                                
                            //alert("Giam");
                            window.location.reload();
                        }
                },
                error: function(xhr, status, error) {
                    // Xử lý khi có lỗi xảy ra trong quá trình request
                    console.log(xhr.responseText); // Thông tin lỗi cụ thể
                    console.log(status); // Mã trạng thái lỗi
                    alert(error); // Thông điệp lỗi
                }
            });
            debugger;
                    
        }
    });

    function continueProcessing() {
        let arr = []; // mảng mới
        
        custommerCart.forEach(item => {
            if(item.id != evt.parentElement.parentElement.children[1].textContent){
                arr.push(item);
            }
        });
        
        if (arr.length == 0) {
            localStorage.removeItem('cartItems_' + userEmail);
        } else {
            localStorage.setItem('cartItems_' + userEmail, JSON.stringify(arr));
        }
        
    }
    
};

function loadShoppingCart(){

    let updatedCart = [];
    const selectedItems = (evt) => {
        if (userEmail === "Khách") {
            alert("Vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng.");
            window.location.reload();
            return;
        }
        const linkClicked = evt.target;
        const parentElement = linkClicked.parentElement;      
        let productId = parentElement.querySelector('.id-product').textContent.trim();
        //kiem tra trong csdl
        $.ajax({
            type: 'POST',
            url: 'update_stock.php',
            data: { productId: productId },
            success: function(response) {
                if (response === "hetHang") {
                    // Hiển thị thông báo sản phẩm hết hàng
                    alert("Sản phẩm đã hết hàng.");
                } else {
                    if(typeof(Storage) !== "undefined"){
                        // kiểm tra hỗ trợ trình duyệt cho localStorage
                        let newItem = {
                            id: parentElement.querySelector('.id-product').textContent.trim(),
                            name: parentElement.querySelector('h4 a').textContent.trim(),
                            price: parentElement.querySelector('.item_price').textContent.trim(),
                            quantity: 1
                        };
                        //Kiểm tra tồn tại trong localstore chưa, nếu chưa thì tạo mới.
                        if(JSON.parse(localStorage.getItem('cartItems_' + userEmail)) === null){
                            updatedCart.push(newItem);
                            localStorage.setItem('cartItems_' + userEmail, JSON.stringify(updatedCart));
                            window.location.reload();
                        }else{
                            //localstorage đã tồn tại
                            updatedCart = JSON.parse(localStorage.getItem('cartItems_' + userEmail));
                            //neu ton tai thi cap nhat so luong
                            if((index = isExistedInCart(newItem, updatedCart)) >= 0){
                                updatedCart[index].quantity++;
                                localStorage.setItem('cartItems_' + userEmail, JSON.stringify(updatedCart));
                                window.location.reload();
                            //neu item chua co trong gio hang thi tao moi
                            }else{
                                updatedCart.push(newItem);
                                localStorage.setItem('cartItems_' + userEmail, JSON.stringify(updatedCart));
                                window.location.reload();
                            }
                        }
                        alert('Đã thêm sản phẩm vào giỏ hàng.');
                    } else{
                        alert('Local storage is  not working on your browser');
                    }
                } 
            }
        });
        
    }

    const attachingEvent = evt => evt.addEventListener('click', selectedItems);

    const add2CartLinks = document.getElementsByClassName('item_add');
    let arrCartLinks = Array.from(add2CartLinks);
    arrCartLinks.forEach(attachingEvent);

    // const shoppingCard = document.querySelector('.cart box_1');
    // shoppingCard.addEventListener("click", function(){
    //     window.location.href = "checkout.php";
    // });

    //cap nhat so item trong gio hang tren trang chu
    if (userEmail !== "Khách") {
        if(localStorage.getItem('cartItems_' + userEmail) !== null){
            const numberOrderedItems = document.querySelector('.ordered-items');
            let numberOfItems = 0;
            let custommerCart = JSON.parse(localStorage.getItem('cartItems_' + userEmail));
            custommerCart.forEach(item => {
                numberOfItems += item.quantity;
            });
            numberOrderedItems.innerHTML = "( " + numberOfItems + " sản phẩm )";
        }
    }
    
}

function showCart(){
    setTimeout(function() {
        if (userEmail === "Khách") {
            alert("Vui lòng đăng nhập để tiếp tục");
            window.location.href = "./index.php";
            return;
        }
    
        if(localStorage.getItem('cartItems_' + userEmail) == undefined){
            alert('Your cart is empty. Please go back homepage to order items.');
            window.location.href = "./index.php";
        }else{
            let custommerCart = JSON.parse(localStorage.getItem('cartItems_' + userEmail));
            
            const tblHead = document.getElementsByTagName('thead')[0];
            const tblBody = document.getElementsByTagName('tbody')[0];
            const tblHFoot = document.getElementsByTagName('tfoot')[0];
    
            let headColumns = bodyRows = footColumns = '';
    
            headColumns += '<tr><th>STT</th><th>Mã sản phẩm</th><th>Tên sản phẩm</th> <th>Số lượng</th><th>Đơn giá</th><th>Xóa</th></tr>';
            
            tblHead.innerHTML = headColumns;
            vat = total = amountPaid = 0;
            no = 0; /* ordinalNumber = 0; */
            if(custommerCart[0] === null){
                bodyRows += '<tr><td colspan="5">Không có sản phẩm</td></tr>'
            }else{
                custommerCart.forEach(item => {
                    total += Number(item.quantity) * Number(item.price.replace(/[^0-9]/g,""));
                    bodyRows += '<tr><td>'+ ++no +'</td><td>' + item.id + '</td><td>' 
                    + item.name + '</td><td>' + '<a onclick=increaseQuantity(this); id="quality-add" class="quality" style="cursor: pointer;"> + </a>' + '<span>' + item.quantity + '</span>' + '<a onclick=decreaseQuantity(this); id="quality-subtract" class="quality" style="cursor: pointer;"> - </a>' + '</td><td>' + formatCurrency(
                    item.price.replace(/[^0-9]/g, "")) + '</td><td><a style="color: red;" href="#" onclick=deleteCart(this);>Xóa</a></td></tr>';
                });
            }
    
            tblBody.innerHTML = bodyRows;
            // footColumns += '<tr><td colspan="4">Tổng: </td> <td>' + formatCurrency(total)
            //                     + '</td><td rowspan="3"></td></tr>';
            // footColumns += '<tr><td colspan="4">Thuế (10%):</td> <td>' + formatCurrency(Math.floor(total*0.1))
            //                     + '</td></tr>';
            footColumns += '<tr><td colspan="4">Thành tiền: </td> <td id="currrency" colspan="2">' + formatCurrency(Math.floor(total*1.0))
                                + '</td></tr>';
            tblHFoot.innerHTML = footColumns;
            
        }
    }, 0);
    
}

function deleteCart(evt){

    let updatedCart = [];
    
    let custommerCart = JSON.parse(localStorage.getItem('cartItems_' + userEmail));
    custommerCart.forEach(item => {
        if(item.id != evt.parentElement.parentElement.children[1].textContent){
            updatedCart.push(item);
        }
    });
    if(updatedCart.length === 0){
        localStorage.removeItem('cartItems_' + userEmail);
    }
    else localStorage.setItem('cartItems_' + userEmail,JSON.stringify(updatedCart));
    let removeProductId = evt.parentElement.parentElement.children[1].textContent;
    let numberProducId = evt.parentElement.parentElement.children[3].children[1].textContent;
    $.ajax({
        type: 'POST',
        url: 'update_stock.php',
        data: { removeProductId: removeProductId,
                numberProducId: numberProducId },
        success: function(response) {

        }
    });


    window.location.reload();
};
    ////------------Currency & Percentage format-------------------------
const formatPercentage = (value, locale = "en-US") => {
    return new Intl.NumberFormat(locale, {
        style: "percent",
        minimumFractionDigits: 0,
        maximumFractionDigits: 1
    }).format(value);
};

const formatCurrency = (amount, locale = "vi-VN") => {
    return new Intl.NumberFormat(locale, {
        style: 'currency',
        currency: 'VND',
        minimumFractionDigits: 0,
        maximumFractionDigits: 2
    }).format(amount);
};