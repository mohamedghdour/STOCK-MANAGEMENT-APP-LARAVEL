<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddTriggerToTableName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Replace 'your_table_name' with the actual table name
        // Replace 'your_trigger_name' with the actual trigger name
        // Replace 'NEW.your_column_name' and 'OLD.your_column_name' with actual column names
        
        DB::unprepared('
            CREATE TRIGGER EDIT_QUANTITY
            BEFORE INSERT ON commandes
            FOR EACH ROW
            BEGIN
                    UPDATE products
                    SET quantity = quantity - NEW.quantity
                    WHERE id=NEW.product_id; 
            END;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Replace 'your_trigger_name' with the actual trigger name
        DB::unprepared('DROP TRIGGER IF EXISTS EDIT_QUANTITY');
    }
}

