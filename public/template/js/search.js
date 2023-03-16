// Lấy phần tử form tìm kiếm
const searchForm = document.querySelector('#search-form');

// Xử lý sự kiện submit form
searchForm.addEventListener('submit', function(event) {
    // Ngăn chặn chuyển hướng đến trang khác khi submit form
    event.preventDefault();

    // Lấy keyword từ input
    const keyword = document.querySelector('#search-input').value;

    // Gửi yêu cầu tìm kiếm đến server sử dụng Ajax
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/search');
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Hiển thị kết quả tìm kiếm trên trang web
            const results = JSON.parse(xhr.responseText);
            // code xử lý hiển thị kết quả tìm kiếm ở đây
        } else {
            console.error('Error:', xhr.status);
        }
    };
    xhr.send(JSON.stringify({ keyword: keyword }));
});
