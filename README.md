### Cara mudah insert ke database (tabel posts) menggunan artisan tinker

-   Post::create([
    'title' => 'Sebuah seni mengetik',
    'slug' => 'sebuah-seni-mengetik',
    'excerpt' => 'Di lorong waktu, penyair menyulam kata-kata, mencipta serangkaian makna dalam setiap baitnya.',
    'body' => 'Di lorong waktu, penyair menyulam kata-kata, mencipta serangkaian makna dalam setiap baitnya. Di serangkaian loop waktu, programmer menyusun kode-kode, menciptakan algoritma dalam setiap iterasinya.'
    ])

    Mass Assignment di Laravel adalah teknik yang memungkinkan Anda untuk menyimpan data dalam jumlah besar ke dalam database dengan mudah. Pada umumnya, saat Anda menyimpan data dalam sebuah model, Anda harus menetapkan nilai satu per satu ke setiap kolom pada model. Mass Assignment memungkinkan Anda untuk menyimpan beberapa kolom sekaligus menggunakan array atau objek.

Dalam konteks Laravel, hal ini umumnya digunakan dalam model Eloquent. Untuk menggunakan Mass Assignment, model Anda harus memiliki atribut `$fillable` atau `$guarded` yang ditetapkan.

1. **$fillable:**

    - Jika Anda menggunakan `$fillable`, Anda harus menyebutkan kolom-kolom yang dapat diisi secara massal.
    - Contoh:

        ```php
        class Post extends Model
        {
            protected $fillable = ['title', 'content'];
        }
        ```

        Dengan definisi di atas, Anda dapat menggunakan mass assignment untuk menyimpan data pada kolom 'title' dan 'content' dari model `Post`.

2. **$guarded:**

    - Jika Anda menggunakan `$guarded`, Anda harus menyebutkan kolom-kolom yang **tidak** dapat diisi secara massal.
    - Contoh:

        ```php
        class Post extends Model
        {
            protected $guarded = ['id'];
        }
        ```

        Dengan definisi di atas, semua kolom, kecuali 'id', dapat diisi secara massal.

Contoh penggunaan Mass Assignment:

```php
// Menggunakan mass assignment untuk menyimpan data
$post = Post::create([
    'title' => 'Sebuah seni mengetik',
    'excerpt' => 'Di lorong waktu, penyair menyulam kata-kata, mencipta serangkaian makna dalam setiap baitnya.',
    'body' => 'Di lorong waktu, penyair menyulam kata-kata, mencipta serangkaian makna dalam setiap baitnya. Di serangkaian loop waktu, programmer menyusun kode-kode, menciptakan algoritma dalam setiap iterasinya.'
    ]);
```

Penting untuk diingat bahwa Anda harus berhati-hati dengan penggunaan Mass Assignment, terutama ketika menerima data dari input pengguna. Pastikan untuk menyaring dan memvalidasi data dengan baik agar hanya data yang diperlukan yang dapat diisi secara massal.

#### Untuk menggunakan Mass Assignment pada metode `update` dalam model Eloquent di Laravel, Anda dapat menggabungkan pendekatan yang sama seperti pada metode `create`. Pastikan atribut `$fillable` atau `$guarded` pada model Anda telah diatur dengan benar.

Contoh penggunaan Mass Assignment pada metode `update`:

1. **Menggunakan `$fillable`:**

    ```php
    class Post extends Model
    {
        protected $fillable = ['title', 'content'];
    }
    ```

    Kemudian, pada controller atau di tempat lain, Anda dapat menggunakan metode `update` dengan mass assignment seperti ini:

    ```php
    $post = Post::find($postId);

    $post->update([
        'title' => 'Judul Postingan yang Diperbarui',
        'content' => 'Isi postingan yang diperbarui.'
    ]);
    ```

2. **Menggunakan `$guarded`:**

    ```php
    class Post extends Model
    {
        protected $guarded = ['id'];
    }
    ```

    Dengan pengaturan di atas, semua kolom, kecuali 'id', dapat diisi secara massal pada metode `update`:

    ```php
    $post = Post::find($postId);

    $post->update([
        'title' => 'Judul Postingan yang Diperbarui',
        'content' => 'Isi postingan yang diperbarui.'
    ]);
    ```

Pastikan bahwa metode `update` di atas dilakukan pada instance model yang sudah ada, dan `$postId` adalah ID dari model yang ingin diperbarui. Metode `update` ini akan melakukan operasi `UPDATE` pada baris yang sesuai dalam database dengan menggunakan Mass Assignment.

#### Berikut adalah daftar yang lebih lengkap dari metode Eloquent dan koleksi (collection) beserta contoh dan penjelasan dalam format Markdown:

### Eloquent:

| Metode                              | Contoh                                    | Penjelasan                                                 |
| ----------------------------------- | ----------------------------------------- | ---------------------------------------------------------- |
| `all()`                             | `$users = User::all();`                   | Mendapatkan semua record dari tabel.                       |
| `find($id)`                         | `$user = User::find(1);`                  | Mencari record berdasarkan ID.                             |
| `findOrFail($id)`                   | `$user = User::findOrFail(1);`            | Mencari record berdasarkan ID, error jika tidak ditemukan. |
| `create($data)`                     | `User::create([...]);`                    | Membuat record baru.                                       |
| `update($data)`                     | `$user->update([...]);`                   | Memperbarui record yang sudah ada.                         |
| `delete()`                          | `$user->delete();`                        | Menghapus record.                                          |
| `where($column, $operator, $value)` | `User::where('status', 'active')->get();` | Membuat kondisi dalam query.                               |
| `orderBy($column, $direction)`      | `User::orderBy('name', 'asc')->get();`    | Mengurutkan hasil query.                                   |
| `with($relation)`                   | `Post::with('comments')->get();`          | Eager loading untuk mengoptimalkan kueri N+1.              |
| `first()`                           | `$firstUser = User::first();`             | Mendapatkan record pertama.                                |
| `firstOrFail()`                     | `$firstUser = User::firstOrFail();`       | Mendapatkan record pertama, error jika tidak ada.          |
| `count()`                           | `$userCount = User::count();`             | Mendapatkan jumlah record.                                 |

### Koleksi (Collection):

| Metode                    | Contoh                                                           | Penjelasan                                                  |
| ------------------------- | ---------------------------------------------------------------- | ----------------------------------------------------------- |
| `all()`                   | `$collection->all();`                                            | Mendapatkan semua elemen dalam koleksi.                     |
| `first()`                 | `$firstItem = $collection->first();`                             | Mendapatkan elemen pertama dari koleksi.                    |
| `last()`                  | `$lastItem = $collection->last();`                               | Mendapatkan elemen terakhir dari koleksi.                   |
| `count()`                 | `$count = $collection->count();`                                 | Mendapatkan jumlah elemen dalam koleksi.                    |
| `map($callback)`          | `$doubledValues = $collection->map(function ($item) {...});`     | Mengaplikasikan fungsi ke setiap elemen dalam koleksi.      |
| `filter($callback)`       | `$filteredValues = $collection->filter(function ($item) {...});` | Mengembalikan elemen-elemen yang memenuhi kondisi tertentu. |
| `pluck($column)`          | `$names = $collection->pluck('name');`                           | Mengambil kolom tertentu dari setiap elemen dalam koleksi.  |
| `sortBy($column)`         | `$sortedCollection = $collection->sortBy('name');`               | Mengurutkan koleksi berdasarkan kolom tertentu.             |
| `groupBy($column)`        | `$groupedCollection = $collection->groupBy('category');`         | Mengelompokkan koleksi berdasarkan kolom tertentu.          |
| `merge($otherCollection)` | `$mergedCollection = $collection->merge($otherCollection);`      | Menggabungkan dua koleksi.                                  |

Pastikan untuk menyesuaikan dan memperluas daftar ini sesuai dengan kebutuhan proyek Anda.
