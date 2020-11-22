<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\ContactRequest;
    use App\Models\Contact;
    use Illuminate\Http\Request;

    class ContactController extends Controller
    {
        public function index()
        {
            return view('master');
        }

        public function search(Request $request)
        {
            $query = $request->get('query');
            if ($query != '') {
                $data = Contact::whereRaw("concat(first_name, ' ', last_name) like '%$query%'")
                               ->orWhere('email', 'like', "%{$query}%")
                               ->orWhere('mobile', 'like', "%{$query}%")
                               ->orWhere('post_code', 'like', "%{$query}%");
            } else {
                $data = Contact::orderBy('first_name', 'asc');
            }
            return $data->get();
        }

        public function update(ContactRequest $request)
        {
            return Contact::updateOrCreate(
                ['id' => $request->get('id')],
                ['first_name' => $request->get('first_name'),
                 'last_name'  => $request->get('last_name'),
                 'email'      => $request->get('email'),
                 'mobile'     => $request->get('mobile'),
                 'post_code'  => $request->get('post_code'),
                ]
            );
        }

        public function delete(Request $request)
        {
            return Contact::whereId($request->get('id'))->delete();
        }
    }
