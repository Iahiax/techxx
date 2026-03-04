use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateContractsTable extends Migration
{
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('org_id');
            $table->unsignedBigInteger('customer_id');
            $table->string('contract_number');
            $table->string('contract_type');
            $table->decimal('principal_amount', 15, 2);
            $table->decimal('total_amount', 15, 2);
            $table->decimal('paid_amount', 15, 2);
            $table->decimal('remaining_amount', 15, 2);
            $table->decimal('monthly_installment', 15, 2);
            $table->integer('installment_count');
            $table->integer('paid_installments');
            $table->integer('remaining_installments');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('status');
            $table->json('raw_contract_data');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}