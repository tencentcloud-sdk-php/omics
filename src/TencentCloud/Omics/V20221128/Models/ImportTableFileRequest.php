<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportTableFile请求参数结构体
 *
 * @method string getProjectId() 获取表格关联的项目ID。
 * @method void setProjectId(string $ProjectId) 设置表格关联的项目ID。
 * @method string getName() 获取表格名称。最多支持200个字符。
 * @method void setName(string $Name) 设置表格名称。最多支持200个字符。
 * @method string getCosUri() 获取表格文件Cos对象路径。
 * @method void setCosUri(string $CosUri) 设置表格文件Cos对象路径。
 * @method array getDataType() 获取表格文件中每列的数据类型，支持的类型包括：Int、Float、String、File、Boolean、Array[Int]、Array[Float]、Array[String]、Array[File]、Array[Boolean]
 * @method void setDataType(array $DataType) 设置表格文件中每列的数据类型，支持的类型包括：Int、Float、String、File、Boolean、Array[Int]、Array[Float]、Array[String]、Array[File]、Array[Boolean]
 * @method string getDescription() 获取表格描述。最多支持500个字符。
 * @method void setDescription(string $Description) 设置表格描述。最多支持500个字符。
 */
class ImportTableFileRequest extends AbstractModel
{
    /**
     * @var string 表格关联的项目ID。
     */
    public $ProjectId;

    /**
     * @var string 表格名称。最多支持200个字符。
     */
    public $Name;

    /**
     * @var string 表格文件Cos对象路径。
     */
    public $CosUri;

    /**
     * @var array 表格文件中每列的数据类型，支持的类型包括：Int、Float、String、File、Boolean、Array[Int]、Array[Float]、Array[String]、Array[File]、Array[Boolean]
     */
    public $DataType;

    /**
     * @var string 表格描述。最多支持500个字符。
     */
    public $Description;

    /**
     * @param string $ProjectId 表格关联的项目ID。
     * @param string $Name 表格名称。最多支持200个字符。
     * @param string $CosUri 表格文件Cos对象路径。
     * @param array $DataType 表格文件中每列的数据类型，支持的类型包括：Int、Float、String、File、Boolean、Array[Int]、Array[Float]、Array[String]、Array[File]、Array[Boolean]
     * @param string $Description 表格描述。最多支持500个字符。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CosUri",$param) and $param["CosUri"] !== null) {
            $this->CosUri = $param["CosUri"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
