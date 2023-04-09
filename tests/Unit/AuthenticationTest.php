<?php
namespace Tests\Feature;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered(): void //Phương thức kiểm tra xem trang đăng nhập có thể được hiển thị hay không
    {
        $response = $this->get('/login'); //Thực hiện yêu cầu GET đến đường dẫn '/login'

        $response->assertStatus(200);//Kiểm tra xem phản hồi có trạng thái 200 (OK) hay không
    }

    public function test_user_can_login()
    {
        $user = User::factory()->create([
            'email' => 'usertest@gmail.com',
            'password' => bcrypt('12341234'),
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => '12341234',
        ]);

        $response->assertRedirect('/home');
        $this->assertAuthenticatedAs($user);
    }

    public function test_users_can_authenticate_using_the_login_screen(): void
    //Phương thức kiểm tra xem người dùng có thể xác thực bằng cách sử dụng trang đăng nhập hay không
    {
        $user = User::factory()->create();//Tạo ra một người dùng mới bằng cách sử dụng phương thức factory trong lớp User
        //Thực hiện yêu cầu POST đến đường dẫn '/login' với thông tin đăng nhập được cung cấp
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => '123123',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_users_can_not_authenticate_with_invalid_password(): void
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => '1234123',
        ]);

        $this->assertGuest();
    }
}