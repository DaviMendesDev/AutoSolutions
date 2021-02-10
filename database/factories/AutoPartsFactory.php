<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use App\Models\AutoPart;
use Illuminate\Database\Eloquent\Factories\Factory;

class AutoPartsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AutoPart::class;

    const PARTS_NAMES = [
        'air compressor valve plate, car spare parts',
        'air compressor valve plate, automobile accessory',
        'valve plate motorcycle parts, air compressor valve plate',
        'valve plate car engine parts, auto spare parts car',
        'car wiper blade, customized windshield wiper',
        'auto spare part universal windshield wiper blade cover',
        'windshield windscreen wiper blade, car wiper brush',
        'colored windshield auto spare car wiper blade',
        'harmonic balancer pulley cars auto parts',
        'auto spare part crankshaft balance block, cars auto parts',
        'auto parts harmonic balancer pulley, auto spare part',
        'harmonic balancer for gm, auto spare part',
        'auto spare parts car harmonic balancer, auto parts manufacturer',
        'auto spare part harmonic balancer, automobile parts',
        'crankshaft balance block for gm, auto spare parts',
        'fan pulley bracket, performance auto parts',
        'car parts auto, fan bracket auto parts',
        'wholesale classic oem car parts fan bracket manufacturers',
        'stainless steel fan bracket auto parts',
        'auto parts fan bracket auto spare parts',
        'spare parts car oem, fan bracket car parts',
        'auto parts fan bracket cars auto parts',
        'fan bracket, custom diecast model auto car parts',
        'engine part oil pan, car accessories auto wholesale',
        'auto parts oil pan, china car accessory tuning',
        'china car spare parts, oil pan car spare parts auto',
        'oil pan new car accessories products for car',
        'wholesale small engine parts, auto spare part',
        'oil sump tank car spare parts auto wholesale',
        'timing cover classic car spare parts',
        'timing gear cover auto car spare parts',
        'spare parts car, timing cover car parts',
        'timing cover car parts auto',
        'timing cover auto engine spare part',
        'auto exhaust flexible pipe, bulk exhaust pipe',
        'exhaust pipe name of parts of motor, automobile parts',
        'stainless steel auto parts, exhaust pipe spare parts',
        'motor spare parts auto, stainless steel exhaust pipe',
        'exhaust pipe wholesale, automobile parts exhaust pipe',
        'exhaust manifold car accessories, car exhaust pipe',
        'gas pedal auto spare parts car, skillful car pedal',
        'transmission bearing, auto miniature bearing',
        'roller bearing sizes customized, cheap ball bearing price',
        'car engine parts, factory direct flywheel',
        'auto engine parts, top quality flywheel',
        'auto engine spare parts, durable flywheel',
        'fly wheel, car parts wholesale',
    ];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // randomizes the part name
        $random_part_name = self::PARTS_NAMES[random_int(0, count(self::PARTS_NAMES) - 1)];

        // randomizes the auto_model id
        $auto_models_ids = DB::table('auto_models')->select('id')->pluck('id');
        $random_id_model = $auto_models_ids[random_int(0, count($auto_models_ids) - 1)];

        return [
            'part_name' => $random_part_name,
            'auto_model_id' => $random_id_model,
            'price' => '299.99'
        ];
    }
}
