<?php

namespace Database\Seeders\Badaso;

use Database\Seeders\Badaso\ManualGenerate\BadasoManualGenerateSeeder;
use Illuminate\Database\Seeder;
use Uasoft\Badaso\Module\LMSModule\Seeders\BadasoLMSModuleSeeder;

class BadasoSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(RolePermissionsSeeder::class);
        $this->call(MenusSeeder::class);
        $this->call(FixedMenuItemSeeder::class);
        $this->call(ConfigurationsSeeder::class);

        // TODO: Remove this line before deploying to production
        // to avoid the creation of admin admin user
        $this->call(BadasoManualGenerateSeeder::class);
        $this->call(BadasoLMSModuleSeeder::class);
    }
}
