if(localStorage.getItem('HistoryPay')){
    let html=JSON.parse(localStorage.getItem('HistoryPay'));
    Render(html);
} else console.log("noooo")


function Render(items){
    let html=items.map(function(item,idx){
        let string =item.List.map(function(item,idx){
            return `
                <li>${item}</li>
            `
        }).join('');
        return `
        <li class="list-product-item">
            <div class="seclect-product-input">${idx+1}</div>
            <div class="item-cart-body">
                <details>
                    <ul>
                    ${string}    
                    </ul>
                </details>
                <div class="item-cart-price">${item.Total}$</div>
            </div> 
        </li>
        
        `
    })
    document.querySelector('.List-product').innerHTML=html.join('');
}