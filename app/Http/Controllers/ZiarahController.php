namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZiarahController extends Controller
{
    public function index()
    {
        $ziarahs = Ziarah::all(); // Ambil semua data ziarah
        return view('ziarah.index', compact('ziarahs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lokasi' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jumlah_orang' => 'required|integer',
        ]);

        Ziarah::create($request->all());

        return redirect()->route('ziarah.index')
            ->with('success', 'Data ziarah berhasil disimpan!');
    }
}