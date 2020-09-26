<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Database seed.
 */
class DatabaseSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        // Create accounts
        $accounts = [
            [
                'id' => '1',
                'name' => 'Acme Corporation',
            ]
        ];
        $table = $this->table('accounts');
        $table->insert($accounts)->save();

        // Create users
        $hasher = new DefaultPasswordHasher();
        $users = [
            [
                'account_id' => '1',
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'johndoe@example.com',
                'password' => $hasher->hash('secret'),
                'owner' => true,
            ],
            [
                'account_id' => '1',
                'first_name' => 'Adam',
                'last_name' => 'Doe',
                'email' => 'adamdoe@example.com',
                'password' => $hasher->hash('secret'),
                'owner' => true,
            ],
            [
                'account_id' => '1',
                'first_name' => 'Denny',
                'last_name' => 'Doe',
                'email' => 'dannydoe@example.com',
                'password' => $hasher->hash('secret'),
                'owner' => true,
            ],
            [
                'account_id' => '1',
                'first_name' => 'Kevin',
                'last_name' => 'Doe',
                'email' => 'kevindoe@example.com',
                'password' => $hasher->hash('secret'),
                'owner' => true,
            ],
            [
                'account_id' => '1',
                'first_name' => 'Vin',
                'last_name' => 'Doe',
                'email' => 'vindoe@example.com',
                'password' => $hasher->hash('secret'),
                'owner' => true,

            ],
        ];
        $table = $this->table('users');
        $table->insert($users)->save();

        // Create organizations
        $organizations = [
            [
                'account_id' => '1',
                'name' => 'Johnys Bueuro',
                'email' => 'johnys@bueuro.com',
                'phone' => '1234567892',
                'address' => 'Street no. 10',
                'city' => 'Ahmedabad',
                'region' => 'Gujarat',
                'country' => 'in',
                'postal_code' => '456871',
            ],
            [
                'account_id' => '1',
                'name' => 'Nanny Homes',
                'email' => 'nanny@homes.com',
                'phone' => '9876542318',
                'address' => 'Street no. 55',
                'city' => 'Pune',
                'region' => 'Maharastra',
                'country' => 'in',
                'postal_code' => '987564',
            ],
        ];
        $table = $this->table('organizations');
        $table->insert($organizations)->save();

        // Create contacts
        $contacts = [
            [
                'account_id' => '1',
                'organization_id' => '1',
                'first_name' => 'Mannie',
                'last_name' => 'Doe',
                'email' => 'maniie.doe@example.com',
                'phone' => '8523697410',
                'address' => 'Opp. new mention',
                'city' => 'Ahmedabad',
                'region' => 'Gujarat',
                'country' => 'in',
                'postal_code' => '456871',
            ],
            [
                'account_id' => '1',
                'organization_id' => '2',
                'first_name' => 'Jason',
                'last_name' => 'Doe',
                'email' => 'jason.doe@example.com',
                'phone' => '9658321470',
                'address' => 'Opp. vastrapur',
                'city' => 'Delhi',
                'region' => 'New Delhi',
                'country' => 'in',
                'postal_code' => '999999',
            ],
            [
                'account_id' => '1',
                'organization_id' => null,
                'first_name' => 'Uni',
                'last_name' => 'Doe',
                'email' => 'uni.doe@example.com',
                'phone' => '4523698710',
                'address' => 'Opp. gurukrupa',
                'city' => 'Amreli',
                'region' => 'Gujarat',
                'country' => 'in',
                'postal_code' => '111111',
            ],
        ];
        $table = $this->table('contacts');
        $table->insert($contacts)->save();
    }
}
