<form action="{{ route('agent.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" id="name"  placeholder="Nom de l'agent"><br>
    <input type="text" name="username" id="username" placeholder="Postnom de l'agent"><br>
    <input type="text" name="firstname" id="firstname" placeholder="Prenom de l'agent"><br>
    <input type="text" name="contact" id="contact" placeholder="Le contact de l'agent"><br>
    <input type="text" name="birthdayplace" id="birthdayplace" placeholder="Lieu de naissance"><br>
    <input type="date" name="birthday" id="birthday" placeholder="Date de naissance"><br>
    <input type="file" name="picture" id="picture" placeholder="Photo de l'agent"><br>
    <input type="file" name="identity" id="identity" placeholder="Piece d'identité"><br>
    <select name="gender" id="gender"><br>
        <option value="Non reconnu">Non reconnu</option>
        <option value="Masculin">Masculin</option>
        <option value="Feminin">Feminin</option>
    </select>

    <select name="civil_status" id="civil_status"><br>
        <option value="Non reconnu">Non reconnu</option>
        <option value="Marié(e)">Marié(e)</option>
        <option value="Celibataire">Celibataire</option>
    </select>

    <button type="submit">Enregister</button>

</form>
