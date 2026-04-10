   <!-- Table -->
        <div class="table-container">
            <h3 style="margin-bottom:15px;">Recent Users</h3>

            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>

                @foreach([
                    ['name'=>'Ram','email'=>'ram@email.com','status'=>'Active'],
                    ['name'=>'Sita','email'=>'sita@email.com','status'=>'Inactive'],
                    ['name'=>'Hari','email'=>'hari@email.com','status'=>'Active']
                ] as $user)

                <tr>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>
                        <span class="status {{ strtolower($user['status']) }}">
                            {{ $user['status'] }}
                        </span>
                    </td>
                </tr>

                @endforeach

            </table>
        </div>
