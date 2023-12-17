// database/migrations/YYYY_MM_DD_create_products_table.php

public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->decimal('price', 8, 2);
        $table->integer('quantity')->default(0);
        $table->timestamps();
    });
}
