
if(localStorage.getItem('KeyCart')){
    let arr=JSON.parse(localStorage.getItem('KeyCart'));
    RenderList(arr);
}

function RenderList(ArrrProduct){
    let html=ArrrProduct.map(function(item,idx){
        let url;
        let string=item.ImageURl;
            if(string.startsWith('url('))
              url=string.substring( string.indexOf('"')+1,string.lastIndexOf('"'))
             else if(string.startsWith('//s3')) url=`https:${string}`;
                    else url=string;
        return `
        <li class="list-product-item">
            <input type="checkbox" name="" class="seclect-product-input" id="">
            <div class="item-cart-body">
                <div class="item-cart-img" style="background-image: url(${url});"></div>
                <div class="item-cart-name">${item.NameProduct}</div>
                <div class="item-cart-price">${item.PriceProduct}$</div>
            </div> 
         </li>

        `
    })
    document.querySelector('.List-product').innerHTML=html.join(''); 
    GetToltal(ArrrProduct);
}
var arr=[];
var sum=0;
function GetCost(item){
    let string;
    if(!item.PriceProduct.startsWith('null')){
        
        if(item.PriceProduct.indexOf('$')!=-1 ){
            console.log(item.PriceProduct.indexOf('$'))
            string=item.PriceProduct.substring(0,item.PriceProduct.indexOf('$'));
    
        }else string=item.PriceProduct
        let res=string-0;
        return res;
    }
    
    

}

function GetToltal(Products){
    var HistoryPayListItem=[];
    const CheckBoxInput=document.querySelectorAll('.seclect-product-input');
    CheckBoxInput.forEach(function(item,idx){
        item.onchange=function(){
            let nameItem=item.nextElementSibling.children[1].innerHTML;    
            let total=GetCost(Products[idx]);
            if(item.checked){
                HistoryPayListItem.push(nameItem);
                sum+=total
                arr.push(idx);
            }else {
                sum-=total;
                arr=arr.filter(function(item1,index){
                    return item1!=idx
                })
                HistoryPayListItem=HistoryPayListItem.filter(function(item,idx){
                    return nameItem!=item;
                })

            }
            console.log(arr,HistoryPayListItem)
        document.querySelector('.payment-total').innerHTML=`${sum == 0? sum : sum.toFixed(3)}$`;
        document.querySelector('.payment-quantity').innerHTML=arr.length;
            

            
        }

    })
    document.querySelector('.btn-Buy-Prodcut').onclick=function(){
        let flag=false;
        for(let i=0;i<CheckBoxInput.length;i++){
            if(CheckBoxInput[i].checked==true) {
                flag=true;
                break;
            }
        }
        if(flag){
            let obj={
                Total:sum.toFixed(3),
                List:HistoryPayListItem
            }
            if(localStorage.getItem('HistoryPay')){
                console.log(123)
                let arrHis=JSON.parse(localStorage.getItem('HistoryPay'));
                arrHis.push(obj);
                localStorage.setItem('HistoryPay',JSON.stringify(arrHis));
                console.log("Pushiing");
            }
            else localStorage.setItem('HistoryPay',JSON.stringify([obj]));
            // console.log()
            window.location.href='./index.html'
            alert("Mua Hàng Thành Công");
        } else alert("Vui Lòng Chọn Í Nhất 1 Sản Phẩm")
    }

}
