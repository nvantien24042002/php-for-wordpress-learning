1. Hàm isset(): Kiểm tra sự tồn tại của biến
Hàm này dùng để xác định xem một biến đã được khai báo và có giá trị hay chưa.

Cơ chế hoạt động: Hàm trả về true nếu biến đó tồn tại và giá trị của nó không phải là NULL.

Tính năng mở rộng: Nếu truyền nhiều tham số, hàm chỉ trả về true khi tất cả các biến tham số đều trả về true.

Ứng dụng: Thường được dùng để kiểm tra xem dữ liệu từ form (ví dụ: $_POST) đã được gửi lên hay chưa.

2. Hàm empty(): Kiểm tra dữ liệu rỗng
Hàm này dùng để kiểm tra xem một biến có được coi là "rỗng" hay không.

Cơ chế hoạt động: Một biến được coi là rỗng nếu nó không tồn tại hoặc tồn tại nhưng có giá trị là false.

Các trường hợp biến được coi là false (rỗng):

"" (chuỗi rỗng)

0 (số nguyên 0), 0.0 (số thực 0), hoặc "0" (chuỗi "0")

NULL

FALSE

array() (mảng rỗng)