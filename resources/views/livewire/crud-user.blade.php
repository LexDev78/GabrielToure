<div>

   
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <h5 class="modal-title " id="exampleModalLabel"><span id="span">Nouvel</span> Utilisateur</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="{{route('user.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="e-prenom" class="col-form-label">Prenom <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="e-prenom" name="prenom" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="e-nom" class="col-form-label">Nom <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nom" id="e-nom" required>
                            </div>
                        </div>                 
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="e-telephone" class="col-form-label">Telephone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="e-telephone" name="telephone" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="e-email" class="col-form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" id="e-email" required>
                            </div>
                        </div>                 
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="type_user" class="col-form-label">Type utilisateur <span class="text-danger">*</span></label>
                                <select name="type_user_id" id="e-type_user" required class="form-control">
                                    <option disabled>Choisir</option>
                                    @foreach ($types as $type)
                                        <option value="{{$type->id}}">{{$type->libelle}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                                <select name="status" id="status" required class="form-control">
                                    <option disabled>Choisir</option>
                                    <option value="1">Activer</option>
                                    <option value="0">D??sactiver</option>
                                </select>
                            </div>
                        </div>                 
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="username" class="col-form-label">Username <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="e-usename" name="username">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="password" class="col-form-label">Mot de passe <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="password" id="password">
                            </div>
                        </div>                 
                    </div>                
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>

          </div>
        </div>
    </div>
</div>
