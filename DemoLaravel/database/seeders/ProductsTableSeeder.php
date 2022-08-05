<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'iPhone 12 Pro Max 128GB',
                'price' => 30999000,
                'description' => '6.7, Super Retina XDR, OLED, 2778 x 1284 Pixel, 12.0 MP + 12.0 MP + 12.0 MP, 12.0 MP, A14 Bionic, 128 GB',
                'image' => 'iPhone12.png',
                'quantity' => 11,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'OPPO Reno6 Z 5G',
                'price' => 9490000,
                'description' => 'Không chỉ đưa bạn đến những trải nghiệm đầy phấn khích của mạng 5G siêu tốc, OPPO Reno6 Z 5G còn là chiếc điện thoại tuyệt vời để lưu giữ cảm xúc.',
                'image' => 'OPPOReno6.png',
                'quantity' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Galaxy Z Fold3 | Z Flip3 5G',
                'price' => 41990000,
                'description' => 'Thiết kế tiện dụng bao gồm bao da và S Pen đi kèm, không chỉ giúp bạn bảo vệ tốt điện thoại mà còn có thể ghi chú cùng S Pen mọi lúc mọi nơi.',
                'image' => 'GalaxyZFold3.png',
                'quantity' => 50,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPhone 11 64GB',
                'price' => 14999000,
                'description' => 'iPhone 11 với 6 phiên bản màu sắc, camera có khả năng chụp ảnh vượt trội, thời lượng pin cực dài và bộ vi xử lý mạnh nhất từ trước đến nay sẽ mang đến trải nghiệm tuyệt vời dành cho bạn.',
                'image' => 'iPhone11.png',
                'quantity' => 54,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Xiaomi POCO X3 Pro NFC 8GB-256GB',
                'price' => 7290000,
                'description' => 'Xiaomi POCO X3 Pro NFC là tập hợp của mọi tính năng mà một game thủ cần trên smartphone.',
                'image' => 'XiaomiPOCOX3.png',
                'quantity' => 30,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPhone XR 64GB',
                'price' => 12499000,
                'description' => 'Chiếc iPhone với màn hình Liquid Retina hoàn toàn mới, công nghệ màn hình LCD tiên tiến nhất đi cùng Face ID nhanh hơn, con chip mạnh mẽ và hệ thống camera xóa phông hoàn hảo.',
                'image' => 'iPhoneXR.png',
                'quantity' => 43,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPhone 12 Pro 128GB',
                'price' => 27999000,
                'description' => 'Đến với đẳng cấp Pro đích thực, nơi mà những điều đặc biệt đang chờ đón bạn trên iPhone 12 Pro.',
                'image' => 'iPhone12Pro.png',
                'quantity' => 23,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Xiaomi Redmi 9A 2GB-32GB',
                'price' => 1990000,
                'description' => 'Xiaomi Redmi 9A thể hiện sự vượt trội trong phân khúc giá rẻ khi sở hữu màn hình lớn, thời lượng pin suốt cả ngày và cấu hình tuyệt đỉnh, mang đến cho bạn trải nghiệm thực sự hài lòng.',
                'image' => 'Xiaomi Redmi.png',
                'quantity' => 40,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        Product::insert($data);
    }
}
