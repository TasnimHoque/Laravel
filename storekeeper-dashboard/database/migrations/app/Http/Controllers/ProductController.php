// app/Http/Controllers/ProductController.php

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // ... (previous code)

    public function dashboard()
    {
        $todaySales = $this->getSalesForDate(now()->format('Y-m-d'));
        $yesterdaySales = $this->getSalesForDate(now()->subDay()->format('Y-m-d'));
        $thisMonthSales = $this->getSalesForMonth(now()->format('Y-m'));
        $lastMonthSales = $this->getSalesForMonth(now()->subMonth()->format('Y-m'));

        return view('dashboard', compact('todaySales', 'yesterdaySales', 'thisMonthSales', 'lastMonthSales'));
    }

    public function transactions()
    {
        $transactions = $this->getTransactionHistory();

        return view('transactions', compact('transactions'));
    }

    private function getSalesForDate($date)
    {
        // Logic to fetch sales for a specific date
        return DB::table('sales')
            ->whereDate('created_at', $date)
            ->sum('amount');
    }

    private function getSalesForMonth($month)
    {
        // Logic to fetch sales for a specific month
        return DB::table('sales')
            ->whereMonth('created_at', $month)
            ->sum('amount');
    }

    private function getTransactionHistory()
    {
        // Logic to fetch transaction history
        return DB::table('transactions')
            ->orderBy('created_at', 'desc')
            ->get();
    }
}
