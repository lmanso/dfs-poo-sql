 <!-- Modal -->
 <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="updateLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h3 class="modal-title" id="updateLabel">Formulaire de mise a jour</h3>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="/updateCharacter?<?= $value->id ?>" method="post">
                     <fieldset>
                         <div class="form-group">
                             <label for="">Nom</label>
                             <input type="input" class="form-control" name="name" aria-describedby="Modifiez le nom de votre personnage" placeholder="Nom de votre personnage">
                         </div>
                         <div class="form-group">
                             <label for="">Modifier l'image (via url)</label>
                             <input type="input" class="form-control" name="image" aria-describedby="l'image representera votre personnage" placeholder="l'image representera votre personnage">
                         </div>
                     </fieldset>
                     <button type="submit" class="btn btn-success">Valider</button>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
             </div>
             </form>
         </div>
     </div>
 </div>