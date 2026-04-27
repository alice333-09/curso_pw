<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
             <h1>Lista de Jogos</h1>

    <ul>
        @foreach($categories as $category)
            <li>{{ $categories->nome }}</li> 
        @endforeach
    </ul>
</div>
