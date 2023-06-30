<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Productos Controller
 *
 * @property \App\Model\Table\ProductosTable $Productos
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $productos = $this->paginate($this->Productos);

        $this->set(compact('productos'));
    }

    /**
     * View method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $producto = $this->Productos->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('producto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $producto = $this->Productos->newEmptyEntity();
        if ($this->request->is('post')) {
            $producto = $this->Productos->patchEntity($producto, $this->request->getData());
            if ($this->Productos->save($producto)) {
                $this->Flash->success(__('El producto ha sido guardado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo guardar el producto. Inténtalo de nuevo'));
        }
        $this->set(compact('producto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $producto = $this->Productos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $producto = $this->Productos->patchEntity($producto, $this->request->getData());
            if ($this->Productos->save($producto)) {
                $this->Flash->success(__('El producto ha sido guardado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo guardar el producto. Inténtalo de nuevo'));
        }
        $this->set(compact('producto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $producto = $this->Productos->get($id);
        if ($this->Productos->delete($producto)) {
            $this->Flash->success(__('The producto has been deleted.'));
        } else {
            $this->Flash->error(__('The producto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
