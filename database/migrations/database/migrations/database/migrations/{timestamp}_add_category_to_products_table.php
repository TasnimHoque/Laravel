public function up()
{
    Schema::table('products', function (Blueprint $table) {
        $table->string('category', 50);
    });
}
