namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables and assign values
        $name = "Donal Trump";
        $age = "75";

        // Add variables to $data as an associative array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Set cookie variables
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Set the cookie
        $response = new Response();
        $response->withCookie(
            cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly)
        );

        // Return the data as a response with status code 200 and the cookie
        return response()->json($data)->withCookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);
    }
}