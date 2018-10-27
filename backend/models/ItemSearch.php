<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ItemModel;

/**
 * ItemSearch represents the model behind the search form of `app\models\ItemModel`.
 */
class ItemSearch extends ItemModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'quantidade', 'tipo_item', 'id_projeto'], 'integer'],
            [['natureza', 'numero_item', 'justificativa', 'descricao'], 'safe'],
            [['valor', 'custo_unitario'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ItemModel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'valor' => $this->valor,
            'quantidade' => $this->quantidade,
            'custo_unitario' => $this->custo_unitario,
            'tipo_item' => $this->tipo_item,
            'id_projeto' => $this->id_projeto,
        ]);

        $query->andFilterWhere(['like', 'natureza', $this->natureza])
            ->andFilterWhere(['like', 'numero_item', $this->numero_item])
            ->andFilterWhere(['like', 'justificativa', $this->justificativa])
            ->andFilterWhere(['like', 'descricao', $this->descricao]);

        return $dataProvider;
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function searchByProject($params, $id_projeto)
    {
        $query = ItemModel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'valor' => $this->valor,
            'quantidade' => $this->quantidade,
            'custo_unitario' => $this->custo_unitario,
            'tipo_item' => $this->tipo_item,
            'id_projeto' => $id_projeto,
        ]);

        $query->andFilterWhere(['like', 'natureza', $this->natureza])
            ->andFilterWhere(['like', 'numero_item', $this->numero_item])
            ->andFilterWhere(['like', 'justificativa', $this->justificativa])
            ->andFilterWhere(['like', 'descricao', $this->descricao]);

        return $dataProvider;
    }
}
