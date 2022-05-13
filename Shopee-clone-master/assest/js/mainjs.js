const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);
sessionStorage.setItem("cart", JSON.stringify([]));
const catalogListPC = $(".category-list");
const catalogListMobile = $(".mobile-category__list");
const catalogListFooter = $(".footer-list");
const LeftBtnPagi = $(".pagination-item-left-btn");
const RightBtnPagt = $(".pagination-item-right-btn");
const ModalDetailEle = $(".modal-detail-product");
let CurrentArrItems = [];
let SearchArrItems = [];
let CurrentPage = 0;
let searchString = "";
function GenerarePageNum(step, end) {
  let arr = [];
  for (let i = 0; i <= end; i += step) {
    arr.push({
      a: i,
      b: i + step - 1,
    });
  }
  return arr;
}

const PageNum = GenerarePageNum(5, 1000);
// console.log(PageNum);
RenderCatolog();
GetProduct();
ControlPage();
GetSearchProduct();

function DeleteLogout() {
  console.log("Delete Local");
  localStorage.removeItem("login");
  window.location.href = "handle_logout.php";
}

function GetSearchProduct() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      SearchArrItems = JSON.parse(this.responseText).result;
      console.log(SearchArrItems);

      SearchArrItems = SearchArrItems.map(function (item, idx) {
        // console.log(item);
        let ten = item.TENSP.toLowerCase();
        let hang = item.TENHANG.toLowerCase();
        return {
          ...item,
          TENSP: ten,
          TENHANG: hang,
        };
      });
      console.log(SearchArrItems);
    }
  };
  xmlhttp.open("GET", "ShowProduct.php?tab=searchItem", true);
  xmlhttp.send();
}

function ControlPage() {
  LeftBtnPagi.onclick = function (e) {
    console.log("dang click -");

    if (CurrentPage > 0) {
      CurrentPage--;
      let res = PageNum[CurrentPage];
      $(".pageNUm").innerText = CurrentPage + 1;
      GetPaginationForProduct(res.a, res.b);
    } else CurrentPage = 0;
  };

  RightBtnPagt.onclick = function (e) {
    console.log("dang click +");
    let tmp = PageNum[CurrentPage + 1];
    if (CurrentPage < 19) {
      if (CurrentArrItems.length > tmp.b && CurrentPage < PageNum.length) {
        CurrentPage++;
        let res = PageNum[CurrentPage];
        GetPaginationForProduct(res.a, res.b);
        $(".pageNUm").innerText = CurrentPage + 1;
      }
    }
  };
}

function RenderCatolog() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let arr = JSON.parse(this.responseText).result;
      let tmparr = arr;
      let html = tmparr.map(function (item, idx) {
        return `
          <li class="category-item ${idx == 0 ? "category-item--active" : ""}">
              <a href="#" class="category-item__link ${
                item.MALOAI
              }">${item.TENLOAI}</a>
          </li>
          `;
      });
      catalogListPC.innerHTML = html.join("");

      html = tmparr.map(function (item, idx) {
        return `
          <li class="mobile-category__item ">
              <a href="#" class="mobile-category__link ${item.MALOAI}">${item.TENLOAI}</a>
          </li>
        `;
      });
      catalogListMobile.innerHTML = html.join("");
      Catolog();
    }
  };
  xmlhttp.open("GET", "ShowProduct.php?tab=shctl", true);
  xmlhttp.send();
}

function GetPaginationForProduct(From, To) {
  if (CurrentArrItems.length < To) {
    To = CurrentArrItems.length - 1;
    From = To - 10;
  }
  let ArrayRender = CurrentArrItems.slice(From, To);
  RenderProducts(ArrayRender);
  console.log(From, To);
}

function RenderProducts(Arr) {
  console.log("Arr Product ", Arr);
  Arr = Sort("INS", Arr);
  let htmls = Arr.map(function (item, idx) {
    let html = `
    <div id="${item.MASP}" class="col l-2-4 m-4 c-6">
        <a class="home-product-item" >
            <div class="home-product-item__img" style="background-image:url(./admin/image/${
              item.IMG
            })" ></div>
            <h4 class="home-product-item__name">${item.TENSP}</h4>
            <div class="home-product-item__price">
                <span class="home-product-item__price-old">${
                  item.GIA - 10
                }</span>
                <span class="home-product-item__price-current">${
                  item.GIA
                }VND</span>
            </div>
            <div class="home-product-item__action">
                <span class="home-product-item__like home-product-item__like--liked">
                    <i class="home-product-item__like-icon-empty far fa-heart"></i>
                    <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                </span>
                <div class="home-product-item__rating">
                    <i class="home-product-item__star--gold fas fa-star"></i>
                    <i class="home-product-item__star--gold fas fa-star"></i>
                    <i class="home-product-item__star--gold fas fa-star"></i>
                    <i class="home-product-item__star--gold fas fa-star"></i>
                    <i class="home-product-item__star--gold fas fa-star"></i>
                </div>
                <span class="home-product-item__sold">Đã bán 89/tháng</span>
            </div>
            <div class="home-product-item__origin">
                <span class="home-product-item__origin-name">TP. Hồ Chí Minh</span>
            </div>
            <div class="home-product-item__favourite">
                <i class="fas fa-check"></i>
                <span>Yêu thích</span>
            </div>
            <div class="home-product-item__sale-off">
                <span class="home-product-item__sale-off-percent">10%</span>
                <span class="home-product-item__sale-off-label">GIẢM</span>
            </div>
        </a>
    </div>    
    
    `;
    return html;
  });
  $(".home-product .row").innerHTML = htmls.join("");
  GetDetailProduct();
}

function GetProduct(id = "101") {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let arr = JSON.parse(this.responseText).result;
      let tmparr = arr;
      console.log(arr);
      CurrentArrItems = arr;
      CurrentPage = 0;
      $(".pageNUm").innerText = CurrentPage + 1;
      let res = PageNum[CurrentPage];
      GetPaginationForProduct(res.a, res.b);
      let ArrayRender = CurrentArrItems.slice(res.a, res.b);
      RenderProducts(ArrayRender);
    }
  };
  xmlhttp.open("GET", "ShowProduct.php?tab=shpr&id=" + id, true);
  xmlhttp.send();
}

function Catolog() {
  const ListCatolog = $$(".category-item");
  const ListCatologMobile = $$(".mobile-category__item");
  const MainCatalogList = [...ListCatolog, ...ListCatologMobile];
  // console.log(" k ", ListCatologMobile);
  MainCatalogList.forEach(function (item, idx) {
    item.onclick = function (e) {
      if (item.className.includes("category-item")) {
        if ($(".category-item.category-item--active")) {
          $(".category-item.category-item--active").classList.remove(
            "category-item--active"
          );
        }
        this.classList.add("category-item--active");
      }

      console.log(this.children[0].classList);
      GetProduct(this.children[0].classList[1]);
    };
  });
}

SearchFeature();
function SearchFeature() {
  let ArrResultSearch = [];
  console.log($(".header__search-input"));
  $(".header__search-input").onkeyup = function (e) {
    // console.log(e);
    if ($(".header__search-input").value == "") {
      console.log("empty");
      searchString = "";
    }
    if (e.key == "Enter") {
      if ($(".category-item.category-item--active")) {
        $(".category-item.category-item--active").classList.remove(
          "category-item--active"
        );
      }
      SearchArrItems.forEach(function (item, idx) {
        if (
          item.TENHANG.indexOf(searchString) != -1 &&
          !ArrResultSearch.includes(item)
        ) {
          // console.log(item);
          ArrResultSearch.push(item);
        }
        if (
          item.TENSP.indexOf(searchString) != -1 &&
          !ArrResultSearch.includes(item)
        ) {
          // console.log(item);
          ArrResultSearch.push(item);
        }
      });
      console.log("Ket qua search ", ArrResultSearch);
      CurrentArrItems = ArrResultSearch;
      CurrentPage = 0;
      $(".pageNUm").innerText = CurrentPage + 1;
      let res = PageNum[CurrentPage];
      GetPaginationForProduct(res.a, res.b);
      let ArrayRender = CurrentArrItems.slice(res.a, res.b);
      RenderProducts(ArrayRender);
    }
    if (e.key == "Backspace")
      searchString = searchString.substring(0, searchString.length - 1);
    else {
      if (e.key != "Control" && e.key != "CapsLock") {
        searchString += e.key;
      }
    }
    if (searchString != "") {
      console.log("Chuoi search" + searchString);
      // SearchArrItems.forEach(function (item, idx) {
      //   if (item.TENHANG.indexOf(searchString) != -1 && !ArrResultSearch.includes(item) ) {
      //     // console.log(item);
      //     ArrResultSearch.push(item);
      //   }
      // });
      // console.log(ArrResultSearch);
    } else ArrResultSearch = [];
  };
}

function RenderModalDetail(item) {
  $(".modal-detail-product-body").innerHTML =
    '<i class="fas fa-times js-close-btn"></i>';
  let html = `
  <div class="modal-detail-product-img" style="background-image: url(./admin/image/${item.IMG});"></div>
  <div class="modal-detail-product-contend">
      <h3 class="modal-detail-product-nameProduct">${item.TENSP} </h3>
      <p class="modal-detail-product-description">
         ${item.DESCRIPTION}
      </p>
      <div class="modal-detail-product-price">
          ${item.GIA}$
      </div>
      <div class="modal-detail-product-btns">
          <div class="modal-detail-product-addToCart modal-detail-product-btn">Thêm vào giỏ hàng</div>
          
      </div>
  </div>
  `;
  $(".modal-detail-product-body").insertAdjacentHTML("beforeend", html);
  ModalControl();
  $(".modal-detail-product-addToCart").onclick = function (e) {
    if (!JSON.parse(localStorage.getItem("login"))) {
      window.location.href = "login.php";
      return;
    }
    let getData = JSON.parse(sessionStorage.getItem("cart"));
    // console.log(sessionStorage.getItem("cart"));
    let index = -1;
    let check = getData.find(function (item1, idx) {
      if (item1.MASP == item.MASP) index = idx;
      return item1.MASP == item.MASP;
    });
    let sl = 0;
    if (check != null) {
      console.log("vi tri cat tai ", index);
      let res = getData.splice(index, 1);
      console.log("Đã có sản phẩm trong cart -> tăng số lượng sp", res);
      res[0].SL = res[0].SL + 1;
      // console.log( res[index]);
      getData = [...getData, ...res];
      // console.log(getData)
    } else {
      console.log("Chưa có sản phẩm trong cart -> gán số lượng = 1");
      let obj = {
        ...item,
        SL: 1,
      };
      getData = [...getData, obj];
    }
    sessionStorage.setItem("cart", JSON.stringify(getData));
    DisplayCart();
  };
  // $('.modal-detail-product-addToCart').onclick=function(){
  //     let Product={
  //       NameProduct:item.name,
  //       PriceProduct:item.price,
  //       ImageURl:item.api_featured_image
  //     }
  //     SetItemLocal(CartProductKey,Product,Store);
  //     GetQuantityCartProduct();
  // }
  //  $('.modal-detail-product-BuyNow').onclick=function(e){

  //     if(Store.getItem('KeyRegis')==undefined) {
  //       e.preventDefault();
  //       window.location.href='./Register.html'
  //     }

  //     let Product={
  //       NameProduct:item.name,
  //       PriceProduct:item.price,
  //       ImageURl:item.api_featured_image
  //     }
  //     SetItemLocal(CartProductKey,Product,Store);
  //     GetQuantityCartProduct();
  //  }
}
function GetDetailProduct() {
  let res = $(".home-product .row").children;
  for (let i = 0; i < res.length; i++) {
    res[i].onclick = function () {
      let get = FindProduct(this.id);
      ModalDetailEle.classList.add("active");
      console.log(get);
      RenderModalDetail(get);
    };
  }
}

function FindProduct(id) {
  let res = CurrentArrItems.find(function (item, idx) {
    return id == item.MASP;
  });
  return res;
}

function ModalControl() {
  ModalDetailEle.onclick = function () {
    ModalDetailEle.classList.remove("active");
  };

  $(".modal-detail-product-body").onclick = function (e) {
    e.stopPropagation();
  };

  $(".js-close-btn").onclick = function () {
    ModalDetailEle.classList.remove("active");
  };
}

function DelCart() {
  $$(".header__cart-item-remove").forEach(function (item, idx) {
    item.onclick = function (e) {
      console.log(e.target, idx);
      let getData = JSON.parse(sessionStorage.getItem("cart"));
      console.log(getData[idx].SL - 1);
      if (getData[idx].SL > 1) {
        // console.log("Trừ số lượng",getData[idx]>SL-1,getData[idx]);
        getData[idx].SL = getData[idx].SL - 1;
      } else {
        getData.splice(idx, 1);
        console.log("Xóa khỏi cart ", getData);
      }
      sessionStorage.setItem("cart", JSON.stringify(getData));
      DisplayCart();
    };
  });
}

function DisplayCart() {
  let ArrTiem = JSON.parse(sessionStorage.getItem("cart"));

  if (ArrTiem.length > 0) {
    let html = ArrTiem.map(function (item, idx) {
      return `
      <li class="header__cart-item">
          <img src="./admin/image/${item.IMG}" alt="" class="header__cart-img">
          <div class="header__cart-item-info">
              <div class="header__cart-item-head">
                  <h5 class="header__cart-item-name">${item.TENSP}</h5>
                  <div class="header__cart-item-price-wrap">
                      <span class="header__cart-item-price">₫${item.GIA}</span>
                      <span class="header__cart-item-multiply">x</span>
                      <span class="header__cart-item-qnt">${item.SL}</span>
                  </div>
              </div>

              <div class="header__cart-item-body">
                  <span class="header__cart-item-description">
                      Phân Loại Hàng: I5-RAM8G-SSD512 
                  </span>
                  <span class="header__cart-item-remove">Xoá</span>
              </div>
          </div>
        </li>
      
      `;
    });
    $(".header__cart-notice").innerHTML = ArrTiem.length;
    $(".header__cart-list-item").innerHTML = html.join("");
    DelCart();
  } else {
    $(".header__cart-list-item").innerHTML = "";

    $(".header__cart-notice").innerHTML = 0;
  }
}

function ChooseSortProduct() {
  $(".increasefliter").onclick = function (e) {};

  $(".decreasefliter").onclick = function (e) {};
}

function BoolGetCheck(item1, item2, condition) {
  if (condition == "INS") return parseInt(item1.GIA) > parseInt(item2.GIA);
  else return parseInt(item1.GIA) <= parseInt(item2.GIA);
}

function Sort(condition, Arr) {
  for (let i = 0; i < Arr.length - 1; i++) {
    for (let j = i + 1; j < Arr.length; j++) {
      let bool = BoolGetCheck(Arr[i], Arr[j], condition);
      if (bool) {
        console.log("Running");
        console.log(bool, Arr[i], Arr[j]);
        let tmp = Arr[i];
        let tmp2 = Arr[j];
        Arr[i] = tmp2;
        Arr[j] = tmp;
        console.log(Arr[i], Arr[j]);
      }
    }
  }
  console.log(Arr);
  return Arr;
}

function uuid() {
  var temp_url = URL.createObjectURL(new Blob());
  var uuid = temp_url.toString();
  URL.revokeObjectURL(temp_url);
  return uuid.substr(uuid.lastIndexOf("/") + 1);
}

const checkOutCart = () => {
  let ArrTiem = JSON.stringify(sessionStorage.getItem("cart"));
  console.log("ArrItem: ", ArrTiem);
  var xmlhttpCheckOut = new XMLHttpRequest();
  xmlhttpCheckOut.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
    }
  };
  xmlhttpCheckOut.open(
    "GET",
    "handle_checkout.php?checkout=" + ArrTiem + "&uuid=" + uuid(),
    true
  );
  xmlhttpCheckOut.send();
};

// const handleCheckUser = () => {
//   var buttonCheckUser = $('.modal-detail-product-addToCart');

//   buttonCheckUser.onclick = function() {
//     var xmlhttpCheckUser = new XMLHttpRequest();
//     xmlhttpCheckUser.onreadystatechange = function () {
//       if (this.readyState == 4 && this.status == 200) {
//        console.log(this.responseText);
//       }
//     };
//     xmlhttpCheckUser.open("GET", "handle_cart.php", true);
//     xmlhttpCheckUser.send();
//   }
// }
