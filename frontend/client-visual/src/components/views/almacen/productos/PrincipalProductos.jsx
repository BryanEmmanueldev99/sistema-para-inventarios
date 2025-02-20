import React, { useEffect, useState } from 'react';
import Settings from '../../../../config/Settings';
import axios from 'axios';

const PrincipalProductos = () => {

    const URLbase = 'http://localhost:8080/';
    const EnpointListaProductos = `${URLbase}categorias`;

    const [categorias, setCategorias] = useState([]);

    console.log(EnpointListaProductos)

    const RecuperarCategorias = () => {
          return axios.get(EnpointListaProductos)
         .then((res) => setCategorias(res.data));
    }

    useEffect(() => {
      RecuperarCategorias();
    }, [])

  return (
    <div>
       <div className="conatiner">
         <h2 className="">Modulo productos</h2>
        </div>

        <div className="t">
            <div
                className="table-responsive"
            >
                <table
                    className="table table-primary"
                >
                    <thead>
                        <tr>
                            <th scope="col">Categoria</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        {categorias && categorias.length > 0 && categorias.map((categoria, index) =>(
                            <tr className="" key={index}>
                            <td scope="row">{categoria.nombre_categoria}</td>
                            <td>Item</td>
                        </tr>
                        ))}
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
  )
}

export default PrincipalProductos
