@extends("layouts.master")
@section("title","Session Utilisateurs")
@section("content")
        <div class="card">
            <div class="card-header d-sm-flex d-block">
                <div class="mr-auto mb-sm-0 mb-3">
                    <h4 class="card-title mb-2">Historique de connexion des utilisatateurs</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table style-1" id="ListDatatableView">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom Prenom</th>
                                <th>Connection</th>
                                <th>Deconnection</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $key=1 ?>
                            @foreach ($sessions as $session)
                                <tr>
                                    <td class="id">{{$key++}}</td>
                                    <td class="nom">{{$session->user->nom.' '.$session->user->prenom}}</td>
                                    <td class="prenom">{{$session->created_at}}</td>
                                    <td class="username">{{$session->updated_at}}</td>
                                </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-danger ">
              <h5 class="modal-title text-white" id="exampleModalLabel">Suprimer un utilisateur</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <p>Êtes vous sûr de vouloir supprimer cet utilisateur <br>
                    la suppression échouera si des donnée lui sont ratachées ! <br>
                    <b>Il est possible de desactiver l'utilisateur</b>

                </p>
              </form>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
              <button type="button" class="btn btn-danger">Continuer</button>
            </div>
          </div>
        </div>


@endsection