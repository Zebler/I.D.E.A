

function ShowSanPham(){  
    $.ajax({
        url:"./view/pages/admin/SanPham.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowThongKe(){
    $.ajax({
        url:"./view/pages/admin/ThongKe.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowLoai(){
    $.ajax({
        url:"./view/pages/admin/Loai.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowQuyen(){
    $.ajax({
        url:"./view/pages/admin/Quyen.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowMau(){
    $.ajax({
        url:"./view/pages/admin/Mau.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowTaiKhoan(){
    $.ajax({
        url:"./view/pages/admin/TaiKhoan.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowVaiTro(){
    $.ajax({
        url:"./view/pages/admin/VaiTro.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowVaiTro_Quyen(){
    $.ajax({
        url:"./view/pages/admin/VaiTro_Quyen.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editVaiTro_Quyen(){
    $.ajax({
        url:"./view/pages/admin/editVaiTro_Quyen.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editPhong(){
    $.ajax({
        url:"./view/pages/admin/editPhong.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowYeuThich(){
    $.ajax({
        url:"./view/pages/admin/YeuThich.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowPhong(){
    $.ajax({
        url:"./view/pages/admin/Phong.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowNguoiDung(){
    $.ajax({
        url:"./view/pages/admin/NguoiDung.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowLoaiNguoiDung(){
    $.ajax({
        url:"./view/pages/admin/LoaiNguoiDung.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editNguoiDung(id){
    $.ajax({
        url:"./view/pages/admin/editNguoiDung.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editLoaiNguoiDung(id){
    $.ajax({
        url:"./view/pages/admin/editLoaiNguoiDung.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editYeuThich(id){
    $.ajax({
        url:"./view/pages/admin/editYeuThich.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editVaiTro(id){
    $.ajax({
        url:"./view/pages/admin/editVaiTro.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editTaiKhoan(id){
    $.ajax({
        url:"./view/pages/admin/editTaiKhoan.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editMau(id){
    $.ajax({
        url:"./view/pages/admin/editMau.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editQuyen(id){
    $.ajax({
        url:"./view/pages/admin/editQuyen.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowPhieuNhap(){
    $.ajax({
        url:"./view/pages/admin/PhieuNhap.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editPhieuNhap(id){
    $.ajax({
        url:"./view/pages/admin/editPhieuNhap.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editGioHang(id){
    $.ajax({
        url:"./view/pages/admin/editGioHang.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowGioHang(){
    $.ajax({
        url:"./view/pages/admin/GioHang.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowChiTietPhieuNhap(){
    $.ajax({
        url:"./view/pages/admin/ChiTietPhieuNhap.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowChiTietHoaDon(){
    $.ajax({
        url:"./view/pages/admin/ChiTietHoaDon.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowAlbum_BaiHat(){
    $.ajax({
        url:"./view/pages/admin/BaiHatAblum.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowChucNang(){  
    $.ajax({
        url:"./view/pages/admin/ChucNang.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function ShowHoaDon(){  
    $.ajax({
        url:"./view/pages/admin/HoaDon.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showCategory(){  
    $.ajax({
        url:"./view/pages/admin/viewCategories.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showSizes(){  
    $.ajax({
        url:"./view/pages/admin/viewSizes.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showProductSizes(){  
    $.ajax({
        url:"./view/pages/admin/viewProductSizes.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showCustomers(){
    $.ajax({
        url:"./view/pages/admin/viewCustomers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showOrders(){
    $.ajax({
        url:"./view/pages/admin/viewAllOrders.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function ChangeOrderStatus(id){
    $.ajax({
       url:"./view/pages/admincontroller/updateOrderStatus.php",
       method:"post",
       data:{record:id},
       success:function(data){
           alert('Order Status updated successfully');
           $('form').trigger('reset');
           showOrders();
       }
   });
}

function ChangePay(id){
    $.ajax({
       url:"./view/pages/admincontroller/updatePayStatus.php",
       method:"post",
       data:{record:id},
       success:function(data){
           alert('Payment Status updated successfully');
           $('form').trigger('reset');
           showOrders();
       }
   });
}


//add product data
function addItems(){
    var p_name=$('#p_name').val();
    var p_desc=$('#p_desc').val();
    var p_price=$('#p_price').val();
    var category=$('#category').val();
    var upload=$('#upload').val();
    var file=$('#file')[0].files[0];

    var fd = new FormData();
    fd.append('p_name', p_name);
    fd.append('p_desc', p_desc);
    fd.append('p_price', p_price);
    fd.append('category', category);
    fd.append('file', file);
    fd.append('upload', upload);
    $.ajax({
        url:"./view/pages/admincontroller/addItemController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Product Added successfully.');
            $('form').trigger('reset');
            showProductItems();
        }
    });
}

//edit product data
function itemEditForm(id){
    $.ajax({
        url:"./view/pages/admin/editItemForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editHoaDon(id){
    $.ajax({
        url:"./view/pages/admin/editHoaDon.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editChiTietPhieuNhap(id){
    $.ajax({
        url:"./view/pages/admin/editChiTietPhieuNhap.php",
        method:"post",
        data:id,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editLoai(id){
    $.ajax({
        url:"./view/pages/admin/editLoai.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editChucNang(id){
    $.ajax({
        url:"./view/pages/admin/editChucNang.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function editChiTietHoaDon(id){
    $.ajax({
        url:"./view/pages/admin/editChiTietHoaDon.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
//update product after submit
function updateItems(){
    var product_id = $('#product_id').val();
    var p_name = $('#p_name').val();
    var p_desc = $('#p_desc').val();
    var p_price = $('#p_price').val();
    var category = $('#category').val();
    var existingImage = $('#existingImage').val();
    var newImage = $('#newImage')[0].files[0];
    var fd = new FormData();
    fd.append('product_id', product_id);
    fd.append('p_name', p_name);
    fd.append('p_desc', p_desc);
    fd.append('p_price', p_price);
    fd.append('category', category);
    fd.append('existingImage', existingImage);
    fd.append('newImage', newImage);
   
    $.ajax({
      url:'./view/pages/admincontroller/updateItemController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Data Update Success.');
        $('form').trigger('reset');
        showProductItems();
      }
    });
}

//delete product data
function itemDelete(id){
    $.ajax({
        url:"./view/pages/admincontroller/deleteItemController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Items Successfully deleted');
            $('form').trigger('reset');
            showProductItems();
        }
    });
}


//delete cart data
function cartDelete(id){
    $.ajax({
        url:"./view/pages/admincontroller/deleteCartController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Cart Item Successfully deleted');
            $('form').trigger('reset');
            showMyCart();
        }
    });
}

function eachDetailsForm(id){
    $.ajax({
        url:"./view/pages/adminview/viewEachDetails.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}



//delete category data
function categoryDelete(id){
    $.ajax({
        url:"./view/pages/admincontroller/catDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Category Successfully deleted');
            $('form').trigger('reset');
            showCategory();
        }
    });
}

//delete size data
function sizeDelete(id){
    $.ajax({
        url:"./view/pages/admincontroller/deleteSizeController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Size Successfully deleted');
            $('form').trigger('reset');
            showSizes();
        }
    });
}


//delete variation data
function variationDelete(id){
    $.ajax({
        url:"./view/pages/admincontroller/deleteVariationController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Successfully deleted');
            $('form').trigger('reset');
            showProductSizes();
        }
    });
}

//edit variation data
function variationEditForm(id){
    $.ajax({
        url:"./view/pages/admin/editVariationForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


//update variation after submit
function updateVariations(){
    var v_id = $('#v_id').val();
    var product = $('#product').val();
    var size = $('#size').val();
    var qty = $('#qty').val();
    var fd = new FormData();
    fd.append('v_id', v_id);
    fd.append('product', product);
    fd.append('size', size);
    fd.append('qty', qty);
   
    $.ajax({
      url:'./view/pages/admincontroller/updateVariationController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Update Success.');
        $('form').trigger('reset');
        showProductSizes();
      }
    });
}
function search(id){
    $.ajax({
        url:"./view/pages/admincontroller/searchController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.eachCategoryProducts').html(data);
        }
    });
}


function quantityPlus(id){ 
    $.ajax({
        url:"./view/pages/admincontroller/addQuantityController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('form').trigger('reset');
            showMyCart();
        }
    });
}
function quantityMinus(id){
    $.ajax({
        url:"./view/pages/admincontroller/subQuantityController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('form').trigger('reset');
            showMyCart();
        }
    });
}

function checkout(){
    $.ajax({
        url:"./view/pages/adminview/viewCheckout.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


function removeFromWish(id){
    $.ajax({
        url:"./view/pages/admincontroller/removeFromWishlist.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Removed from wishlist');
        }
    });
}


function addToWish(id){
    $.ajax({
        url:"./view/pages/admincontroller/addToWishlist.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Added to wishlist');        
        }
    });
}