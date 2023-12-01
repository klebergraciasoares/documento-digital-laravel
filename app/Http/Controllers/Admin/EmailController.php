<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Email;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\Admin\EmailFormRequest;

class EmailController extends Controller
{


    private $email;
    public function __contruct(Email $email)
    {
        $this->email = $email;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        /*
        $emails = Email::get()->toQuery()
            ->orderBy("email", "desc")
            ->paginate(5);

        $mensagemSucesso = session('mensagem.sucesso'); //Busca mensagem

        return view('admin.email.index', ['emails' => $emails])
        ->with('i', (request()->input('page', 1) -1) * 5)
        ->with('mensagemSucesso', $mensagemSucesso);
        */



        //$usuario = $request->user();

        $emails = Email::where([
            [function ($query) use ($request) {
                if(($term = $request->term)){
                    $query->orWhere('email', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
            ->orderBy("id", "desc")
            ->paginate(5);



            if ($emails->isEmpty()) {
                //abort(404);
                return redirect()
                    ->route('emails.index')
                    ->withErrors(['errors' => 'Busca não encontrada. '.$request->term])
                    ->withInput();
            }else{

                $mensagemSucesso = session('mensagem.sucesso'); //Busca mensagem
                return view('admin.email.index', compact('emails'))
                    ->with('i', (request()->input('page', 1) -1) * 5)->with('mensagemSucesso', $mensagemSucesso);
            }


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('emails.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmailFormRequest $request)
    {

        $dataForm = $request->all();

        $emailVerify = Email::where('email', $dataForm['email'])->first();
        if(!empty($emailVerify))
            return redirect()
                ->route('emails.index')
                ->withErrors(['errors' => 'Email já cadastrado!'])
                ->withInput();


        // Vai inserir
        $insert = DB::table('Email')->insert([
            'email' => $dataForm['email']
        ]);


        if ( $insert )
           return redirect()
           ->route('emails.index')
           ->with(['success' => 'Registro Cadastrado com Sucesso'])
           ->withInput();
        else
            return redirect()
                ->route('emails.create')
                ->withErrors(['errors' => 'Erro no Insert'])
                ->withInput();

        //$requestData = $request->all();

        //dd($requestData);
        //dd($request);
        /*
        $emailVerify = Email::where('email', $requestData['email'])->first();
        if(!empty($emailVerify)){
            return redirect()
                ->route('emails.index')
                ->withErrors(['errors' => 'Email já cadastrado!'])
                ->withInput();
                */
        //} else {

            //$requestData = $request->all();

            //$requestData["email"] = ($requestData["email"]);
            //$insert = Email::create($requestData);
            /*if ( $insert ){

                return redirect()
                    ->route('emails.index')
                    ->with(['success' => '- Email Cadastrado com Sucesso'])
                    ->withInput();
*/
                    /*
                    return response()->json([
                        'success' => "Email Cadastrado com Sucesso"
                    ],200);
                    */


                    //return redirect()->route('emails.index')->with('success', json_encode(['success'=>'Email Cadastrado com Sucesso!']));

           /* }else{
                return redirect()
                    ->route('emails.index')
                    ->withErrors(['errors' => 'Erro ao Inserir'])
                    ->withInput();
            }
            */
       // }

    }

    /**
     * Display the specified resource.
     */
    public function show(Email $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $email = Email::find($id);
        //dd($email->id);
        return view('admin.email.edit')->with('email' , $email);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmailFormRequest $request, $id)
    {
        //$usuario = $request->user();

        if(empty($request['email_id'])){
            $id = $id;
        }else{
            $id = $request['email_id'];
        }
        //dd($id);

        $email = Email::find($id);
        $dataForm = $request->all();

        /*$update = DB::table('Email')->update([
            'email' => $dataForm['email']
        ]);*/

        $email->email = $dataForm["email"];

        //$update = $email->update($dataForm);
        $email->update();
        //dd($email->id);

        if ( $email )
           return redirect()
           ->route('emails.index')
           ->with(['success' => 'Registro alterado com Sucesso!'])
           ->withInput();
        else
            return redirect()
                ->route('emails.edit', $id)
                ->withErrors(['errors' => 'Erro ao inserir.'])
                ->withInput();


        //$nome_arq_imagem_aux = $request->input('nome_arq_imagem_aux');
        //$requestData = $request->all();

        //TODO Se não alterar imagem, pega nome que ja estava gravado.
        /*
        if(!empty($request->file('nome_arq_imagem'))){
            $fileName = time().$request->file('nome_arq_imagem')->getClientOriginalName();
            $path = $request->file('nome_arq_imagem')->storeAs('images', $fileName, 'public');
            $requestData["nome_arq_imagem"] = '/storage/'.$path;
        }else{
            $requestData["nome_arq_imagem"] = $nome_arq_imagem_aux;
        }
        */

        //Sett usuario que esta logado no sistema
        //$requestData["id_user"] = $usuario->id;

        //$email->email = strtoupper($requestData["email"]);
        //$email->email = $requestData["email"];
        //dd($requestData["email"]);
        //$email->update();

        //return redirect('emails')->with('flash_message', 'Email atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        //$id = $request['email_id'];
        $email = Email::find($request['email_id']);
        $delete = $email->delete();
        if ( $delete )
           return redirect()
           ->route('emails.index')
           ->with(['success' => 'Registro excluído com Sucesso!'])
           ->withInput();
        else
            return redirect()
                ->route('emails.index', $id)
                ->withErrors(['errors' => 'Erro ao deletar.'])
                ->withInput();


        /*
        $emails = Email::find($id);
        //dd($emails);
        if ($emails) {
          $emails->delete();
        }
        $mensagemSucesso = session('mensagem.sucesso'); //Busca mensagem
        //return redirect()->back();
        return to_route('emails.index')->with('mensagemSucesso', $mensagemSucesso);
        */
    }

    public function search(Request $request)
    {
        $dataForm = $request->all();
        //dd($dataForm);
        if(!empty($dataForm['term']))
        {
        }
        else{
            $emailsList = School::where('social_name', 'LIKE', '%'.$search.'%');

        }

        $nome = '%' .$dataForm['term']. '%';
        $emailsList = DB::table('Email')
            ->where('email', 'LIKE', $nome)
            ->orderBy('email', 'ASC')
            ->paginate(5);

            $emails = $emailsList;


        // Convertendo os itens da coleção paginada para um array
        //$emails = $emailsList->toArray();

        // Convertendo cada objeto para um array associativo
        /*
        $emails = $emailsList->map(function ($item) {
            return (array) $item;
        })->toArray();
        */
        if ($emails->isEmpty()) {
            //abort(404);
            return redirect()
                ->route('emails.index')
                ->withErrors(['errors' => 'Busca não encontrada. '.$dataForm['term']])
                ->withInput();
        }else{
            return view('admin.email.index', ['emails' => $emails, 'dataForm' => $dataForm]);
        }

    }


    public function searchName(Request $request)
    {
        //dd($request->id);
        $dataForm = $request->all();
        //dd($dataForm['id']);
        $email = Email::find($request->id);
        //dd($email->email);

        //return redirect('emails', ['emails' => $email, 'dataForm' => $dataForm]);
        /*
        return response()->json([
            'email_name' => $email->email,
            'email_id' => $email->id
        ],200);
        */
        //return view('admin.email.index', ['emails' => $email]);
        /*
        if (!$email) {
            // O email não foi encontrado, você pode tratar isso de acordo
            // Por exemplo, redirecionar de volta ou exibir uma mensagem de erro
            return redirect()->back()->with('error', 'Email não encontrado');
        }

        return view('admin.email.index', ['emails' => $email]);
        */
        if (!$email) {
            return response()->json(['error' => 'Email não encontrado'], 404);
        }

        return response()->json(['emails' => $email->email]);

    }


    public function cvf_convert_object_to_array($data) {

        if (is_object($data)) {
            $data = get_object_vars($data);
        }

        if (is_array($data)) {
            return array_map(__FUNCTION__, $data);
        }
        else {
            return $data;
        }
    }

    public function object_to_array($object)
    {
        $result = (array)$object;

        foreach($result as &$value) {

            if ($value instanceof stdClass) {
                $value = object_to_array($value);
            }
       }

        return $result;
    }
}
